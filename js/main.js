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
        out +='<li>';
        out +=`<a href="/catalog/${item.id}" class="flex gap-[10px] items-center">`;
        out +=`<img src="./images/${item.img}" alt="" class="w-[70px] h-[70px] object-cover">`;
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
        out +='<div class="cart">';
        out +=`<img class="goods-image" src="/images/${data[key].img}" alt="">`;
        out +=`<p class="name">${data[key].name}</p>`;
        out +='<div class="cost-add-wrapper">';
        out +=`<div class="cost">${data[key].cost}₽</div>`;
        out +=`<button class="add-to-cart" data-id="${key}">Купить</button>` 
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
        out +='<div class="cart">';
        out +=`<img class="goods-image" src="/images/${data[key].img}" alt="">`;
        out +=`<p class="name">${data[key].name}</p>`;
        out +='<div class="cost-add-wrapper">';
        out +=`<div class="cost">${data[key].cost}₽</div>`;
        out +=`<button class="add-to-cart" data-id="${key}">Купить</button>` 
        out +='</div>'; 
        out +='</div>';  
    }
    $('.goods-out').html(out)
    $('.add-to-cart').on('click', (e) => addToCart(e.target.getAttribute('data-id'), data));
}

function addToCart(id, data){
    for(var key in data) {
        if(key == id) { //если в корзине нет товара - делает равным 1
            if(cart[id] == undefined) {
                cart[id] = {
                    id: id,
                    count: 1,
                    img: data[id].img,
                    name: data[id].name,
                    description: data[id].description,
                    cost: data[id].cost,
                    category: data[id].category,
                };
            }
            else{ //если такой товар есть - увеличивает на единицу
                cart[id] = {
                    id: id,
                    count: cart[id].count + 1,
                    img: data[id].img,
                    name: data[id].name,
                    description: data[id].description,
                    cost: data[id].cost,
                    category: data[id].category,
                };
            }
        } 
    }
    
    showMiniCart();
    saveCart();
}

function saveCart(){
    //сохраняю корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
}

function showMiniCart(){
    var out="";
    for(var key in cart){
        out +='<div class="mini-goods">';
        out +=`<img class="goods-image-mini" src="/images/${cart[key].img}" alt="">`;
        out+= key +' --- '+cart[key].count+'<br>';
        out +='</div>';
    }
    out += '<div>';
    out += '<a href="cart.html" class="links" link="#000000" vlink="000000">В корзину</a>';
    out += '</div>';
    $('.mini-cart').html(out);
}

function loadCart(){
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')){
        //если есть - расшифровываю и записываю в переменную
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

$(document).ready(() => {
    init();
    loadCart();
})


// Обработчик на кнопку reset
buttonReset.addEventListener('click', e => resetInputSearch(e))

// Обработчик на изменение текста в inputSearch
inputSearch.addEventListener('input', e => searchItemsCatalog(e))

inputSearch.onblur = (e) => {
    $('#search-output').html("")
};

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