var cart = {};


function getCatalog() {
    let json = null;

    $.getJSON('/goods.json', (data) => {
        console.log(json)
        json = data;
        return json;
    });
    // console.log(json)

    return json;
}

const catalog = $.getJSON('/goods.json', data => data);

function loadCart(){
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')){
        //если есть - расшифровываю и записываю в переменную
        cart = JSON.parse(localStorage.getItem('cart'));
        showCart();
    }
    else{
        $('.main-cart').html('Корзина пуста!');
    }
}

function showCart(){
    // console.log(catalog)
    //вывод корзины
    if(!isEmpty(cart)){
        $('.main-cart').html('Корзина пуста!');
    }
    else{
        var out = '';

        out += `<div class="table-for-cart px-[60px] w-[100%]">`;
        out += `<span class="cart-img-table">Картинка</span>`;
        out += `<span class="name-table ml-[50px]">Название</span>`;
        out += `<span class="description-in-cart-table ml-[150px]">Описание</span>`;
        out += `<span class="ml-[320px]">Кол-во</span>`;
        out += `<span class="ml-[470px]">Стоимость</span>`;
        out += `</div>`;

        for(var id in cart){
            out += `<div class="product-in-cart w-[100%]">`;
            out += `<img class="cart-img" src="images\\${cart[id].img}">`;
            out += `<p class="name w-[200px]">${cart[id].name}</p>`;
            out += `<p class="description-in-cart w-[400px]">${cart[id].description}</p>`;
            out += `<p class="w-[60px]">${cart[id].count}</p>`;
            out += `<button data-id="${id}" class="del-goods">Удалить</button>`;
            out += `<button data-id="${id}" class="plus-goods">+</button>`;
            out += `<button data-id="${id}" class="minus-goods">-</button>`;
            out += `<p class="w-[100px]">${cart[id].count * cart[id].cost}₽</p>`;
            out += `<br>`;
            out += `</div>`;
        }  
        $('.main-cart').html(out);
        $('.del-goods').on('click', delGoods);
        $('.plus-goods').on('click', plusGoods);
        $('.minus-goods').on('click', minusGoods);
    }
    // });
}

function delGoods(){
    //удаляем товар из корзины
    var id = $(this).attr('data-id');
    delete cart[id];
    saveCart();
    showCart();
}

function plusGoods(){
    //добавляет товар в корзине
    var id = $(this).attr('data-id');
    cart[id].count = cart[id].count + 1;
    saveCart();
    showCart();
}

function minusGoods(){
    //вычитает товар из корзины
    var id = $(this).attr('data-id');

    if(cart[id].count == 1){
        delete cart[id];
    }
    else{
        cart[id].count = cart[id].count - 1;     
    }

    saveCart();
    showCart();
}

function saveCart(){
    //сохраняем корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
}

function isEmpty(object) {
    //проверка корзины на пустоту
    for (var key in object)
    if (object.hasOwnProperty(key))  return true;
    return false;
}

$(document).ready(function(){
    loadCart();
})