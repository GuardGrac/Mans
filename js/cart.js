var cart = {};

function init() {
    $.post(
        "admin/core.php", 
        {"action" : "loadCart"},
        loadCart
    )
}

// const catalog = $.getJSON('/goods.json', data => data);

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

        out += `<div class="table-for-cart w-[100%] px-4">`;
        out += `<span class="flex basis-1/12 text-center">Картинка</span>`;
        out += `<span class="basis-2/12 text-center">Название</span>`;
        out += `<span class="basis-4/12 text-center">Описание</span>`;
        out += `<span class="basis-1/12 text-left">Кол-во</span>`;
        out += '<div class="flex basis-3/12 justify-center"></div>';
        out += `<span class="basis-1/12 text-center">Цена</span>`;
        out += `</div>`;

        for(var id in cart){
            out += `<div class="product-in-cart relative w-[100%] my-[2px]" id="${cart[id].id}">`;
            out += '<div class="flex basis-1/12 justify-center">';
            out += `<img class="cart-img" src="images\\${cart[id].img}">`;
            out += `</div>`;
            out += '<div class="flex basis-2/12 justify-center">';
            out += `<p class="name w-[200px]">${cart[id].name}</p>`;
            out += `</div>`;
            out += '<div class="flex basis-4/12 justify-center">';
            out += `<p class="description-in-cart w-[400px]">${cart[id].description}</p>`;
            out += `</div>`;
            out += '<div class="flex basis-1/12 justify-center">';
            out += `<p class="product-count w-[60px]">${parseInt(cart[id].quantity)}</p>`;
            out += `</div>`;
            out += '<div class="flex basis-1/12 justify-center z-[2]">';
            out += `<button data-id="${id}" class="del-goods">Удалить</button>`;
            out += `</div>`;
            out += '<div class="flex basis-1/12 justify-center z-[2]">';
            out += `<button data-id="${id}" class="plus-goods">+</button>`;
            out += `</div>`;
            out += '<div class="flex basis-1/12 justify-center z-[2]">';
            out += `<button data-id="${id}" class="minus-goods">-</button>`;
            out += `</div>`;
            out += '<div class="flex basis-1/12 justify-center z-[2]">';
            out += `<p class="w-[100px]">${parseInt(cart[id].quantity) * parseInt(cart[id].cost)}₽</p>`;
            out += `</div>`;
            out += `<br>`;
            out += `<div class="absolute top-[0px] left-[0px] w-full h-full z-[1]" onclick="openProduct(${cart[id].id_goods})"></div>`;
            out += `</div>`;
        }  
        $('.main-cart').html(out);
        $('.del-goods').on('click', delGoods);
        $('.plus-goods').on('click', plusGoods);
        $('.minus-goods').on('click', minusGoods);
    }
    // });
}

function openProduct(id_goods) {
    window.location.href = 'product.php?id=' + id_goods;  
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
        alert('Товар закончился на складе')
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