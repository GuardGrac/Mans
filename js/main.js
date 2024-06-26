var cart = {}; //корзина
var catalog = {};
var resultSearch = [];

const buttonReset = document.querySelector('button[id="reset"]')
const inputSearch = document.querySelector('input[id="search"]')
const formSearch = document.querySelector('form[id="search-form"]')

function init(){
    // $.getJSON("goods.json",goodsOut);
    $.post(
        "admin/core.php",
        {
            "action" : "loadGoods"
        },
        goodsOut
    );

    $.post(
        "admin/core.php", 
        {"action" : "loadCart"},
        loadCart
    )
}


// Фнкция сброса текста в поисковойй строке
function resetInputSearch(e) {
    e.preventDefault();

    inputSearch.value = "";
    inputSearch.focus();
    $('#search-output').html("")
}


// Функция поиска товаров 
function searchItemsCatalog(e) {
    const result = [];
    var out='';

    for (let i = 0; i < Object.values(catalog).length; i++) {
        if (Object.values(catalog)[i].name.toLowerCase().trim().includes(e.target.value.toLowerCase().trim())) {
            if(e.target.value.trim()) {
                result.push(Object.values(catalog)[i]);
            }
        }
    }

    resultSearch = result;

    result.slice(0, 10).forEach(item => {
        out +='<li class="border-2 border-black z-20 bg-white">';
        out +=`<a href="product.php?id=${item.id}" class="flex gap-[10px] items-center">`;
        out +=`<img src="./images/${item.img}" alt="" class="w-[80px] h-[80px] object-cover">`;
        out +=`<h3>${item.name}</h3>`;
        out +='</a>'; 
        out +='</li>'; 
    });

    if(result.length > 10) {
        out +=`<button onclick="goodsOutSearched(resultSearch)"} type="button">Количество найденных товаров: ${result.length}</button>`; 
    }
    $('#search-output').html(out)
}

// Вывод товаров из поиска
function goodsOutSearched(data){
    $('#search-output').html("")

    inputSearch.value = "";
    inputSearch.focus();

    var out='';
    for(var key in data) {
        out +=`<div class="cart relative">`;
        out +=`<img class="goods-image" src="/images/${data[key].img}" alt="">`;
        out +=`<p class="name w-full">${data[key].name}</p>`;
        out +='<div class="cost-add-wrapper">';
        out +=`<div class="cost">${data[key].cost}₽</div>`;
        out +=`<div class="absolute top-[0px] left-[0px] w-full h-full z-[1]" onclick="openProduct(${data[key].id})"></div>`;
        out +=`<button class="add-to-cart" data-id="${key}">Купить</button>`;
        out +='</div>'; 
        out +='</div>';   
    }
    $('.goods-out').html(out)
    $('.add-to-cart').on('click', (e) => addToCart(e.target.getAttribute('data-id'), data));
}

// Вывод товаров из базы
function goodsOut(data){
    data = JSON.parse(data);
    catalog = data

    var out='';
    for(var key in data) {
        out +=`<div class="cart relative bg-stone-50 rounded-[25px]">`;
        out +=`<img class="goods-image" src="/images/${data[key].img}" alt="">`;
        out +=`<p class="name w-full">${data[key].name}</p>`;
        out +='<div class="cost-add-wrapper">';
        out +=`<div class="cost">${data[key].cost}₽</div>`;
        if (data[key].available_quantity > 0) {
            out += `<div class="absolute top-[0px] left-[0px] w-full h-full z-[1]" onclick="openProduct(${data[key].id})"></div>`;
            out += `<button class="add-to-cart" data-id="${key}">Купить</button>`;
        } else {
            out += `<div class="absolute top-[0px] left-[0px] w-full h-full z-[1]" onclick="openProduct(${data[key].id})"></div>`;
            out += `<button class="empty-cart-btn" data-id="${key}" disabled>Нет в наличии</button>`;
        } 
        out +='</div>'; 
        out +='</div>';  
    }
    $('.goods-out').html(out)
    $('.add-to-cart').on('click', (e) => addToCart(e.target.getAttribute('data-id'), data));
}

function openProduct(id) {
      window.location.href = 'product.php?id=' + id;  
}

function addToCart(id, data){
    var out = Object.values(cart).filter(item => item.id_goods === id);

    if(out.length) {
        Object.keys(cart).map(item => {
            if(cart[item].id_goods == id) {
                if(parseInt(cart[item].available_quantity) > parseInt(cart[item].quantity)) {
                    cart[item] = {
                        id: cart[item].id,
                        id_goods: id,
                        quantity: parseInt(cart[item].quantity) + 1,
                        img: data[id].img,
                        name: data[id].name,
                        description: data[id].description,
                        cost: data[id].cost,
                        category: data[id].category,
                        color: data[id].color,
                        size: data[id].size,
                        structure: data[id].structure,
                        available_quantity: data[id].available_quantity,
                    };
        
                    saveCart(id, cart[item].quantity);
                }
            }
        })
    }
    else{
        if(data[id].available_quantity>0){
            cart[id] = {
            id: id,
            id_goods: id,
            quantity: 1,
            img: data[id].img,
            name: data[id].name,
            description: data[id].description,
            cost: data[id].cost,
            category: data[id].category,
            color: data[id].color,
            size: data[id].size,
            structure: data[id].structure,
            available_quantity: data[id].available_quantity,
        };

        insertCart(id);
        }
        
    }
    
    showMiniCart();
}

function saveCart(id_goods, quantity){
    $.post(
        "admin/core.php",
        {
            "action" : "saveMiniCart",
            "id_goods" : parseInt(id_goods),
            "count" : parseInt(quantity),
        }
    );
}

function insertCart(id_goods){
    $.post(
        "admin/core.php",
        {
            "action" : "insertCart",
            "id_goods" : parseInt(id_goods),
        }
    );
}

function showMiniCart(){
    if(Object.keys(cart).length){
        var out="";
    for(var key in cart){
        out +='<div class="mini-goods relative">';
        out +=`<img class="goods-image-mini" src="/images/${cart[key].img}" alt="">`;
        out +='<div class="name-count-split">';
        out +=`<p>${cart[key].name.split(' ')[0]}...</p>`;
        out +=`<p>${parseInt(cart[key].quantity)} шт.</p>` + '<br>';
        out += `<div class="absolute top-[0px] left-[0px] w-full h-full z-[1]" onclick="openProduct(${cart[key].id_goods})"></div>`;
        out +='</div>';
        out +='</div>';
    }
    out +='<div class="to-cart">';
    out +='<button id="cart-button" class="links" link="#000000" vlink="000000">В корзину';
    out +='<svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 902.86 902.86">';
    out +='<g>';
    out +='<g>';
    out +='<path d="M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z"/>';
    out +='<path d="M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897zM619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742S619.162,694.432,619.162,716.897z"/>';
    out +='</g>'
    out +='</g>';
    out +='</svg>'
    out +='</button>'
    out +='</div>';
    $('.mini-cart').html(out);
    
    document.getElementById('cart-button').addEventListener('click', function() {
        window.location.href = 'cart.php';
    });
    }
   
}

function loadCart(data){
    //проверяю есть ли в localStorage запись cart
    if (JSON.parse(data)){
        //если есть - расшифровываю и записываю в переменную
        cart = JSON.parse(data);
        showMiniCart();
    }
}

$(document).ready(() => {
    init();
})


// Обработчик на кнопку reset
buttonReset.addEventListener('click', e => resetInputSearch(e))

// Обработчик на изменение текста в inputSearch
inputSearch.addEventListener('input', e => searchItemsCatalog(e))

// inputSearch.onblur = (e) => {
//     $('#search-output').html("")
// };

inputSearch.onfocus = (e) => {
    searchItemsCatalog(e)
};

formSearch.addEventListener("submit", (e) => {
    e.preventDefault();
    if(!resultSearch.length){
        window.location.href = "/catalog.php";
    }
    goodsOutSearched(resultSearch)
});