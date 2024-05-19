var cart = {};


function init() {
    $.post(
        "admin/core.php", 
        {"action" : "loadCart"},
        loadCart
    )
}

const catalog = $.getJSON('/goods.json', data => data);

function loadCart(data){    
    //проверяю есть ли в localStorage запись cart
    if (JSON.parse(data)){
        //если есть - расшифровываю и записываю в переменную
        cart = JSON.parse(data);
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
            out += `<div class="product-in-cart w-[100%]" id="${cart[id].id}">`;
            out += `<img class="cart-img" src="images\\${cart[id].img}">`;
            out += `<p class="name w-[200px]">${cart[id].name}</p>`;
            out += `<p class="description-in-cart w-[400px]">${cart[id].description}</p>`;
            out += `<p class="product-count w-[60px]">${parseInt(cart[id].quantity)}</p>`;
            out += `<button data-id="${id}" class="del-goods">Удалить</button>`;
            out += `<button data-id="${id}" class="plus-goods">+</button>`;
            out += `<button data-id="${id}" class="minus-goods">-</button>`;
            out += `<p class="w-[100px]">${parseInt(cart[id].quantity) * parseInt(cart[id].cost)}₽</p>`;
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
    deleteCart(this.closest('.product-in-cart').getAttribute('id'));
    delete cart[id];
    showCart();
}

function plusGoods(){
    //добавляет товар в корзине
    var id = $(this).attr('data-id');

    if(parseInt(cart[id].available_quantity) > parseInt(cart[id].quantity)) {
        cart[id].quantity = parseInt(cart[id].quantity) + 1;

        saveCart(
            this.closest('.product-in-cart').getAttribute('id'),
            cart[id].quantity
        );
    }
    else {
        alert('саси')
    }

    showCart();
}

function minusGoods(){
    //вычитает товар из корзины
    var id = $(this).attr('data-id');

    if(parseInt(cart[id].quantity) == 1){
        delete cart[id];
        deleteCart(this.closest('.product-in-cart').getAttribute('id'));
    }
    else{
        cart[id].quantity = parseInt(cart[id].quantity) - 1;   
        saveCart(
            this.closest('.product-in-cart').getAttribute('id'),
            cart[id].quantity
        );  
    }

    showCart();
}

function saveCart(id, count){
    $.post(
        "admin/core.php",
        {
            "action" : "saveCart",
            "id" : parseInt(id),
            "count" : parseInt(count),
        }
    );
}

function deleteCart(id){
    $.post(
        "admin/core.php",
        {
            "action" : "deleteCart",
            "id" : parseInt(id),
        }
    );
}

function isEmpty(object) {
    //проверка корзины на пустоту
    for (var key in object)
    if (object.hasOwnProperty(key))  return true;
    return false;
}

$(document).ready(function(){
    init();
})