const buyButton = document.getElementById('buy-button');
const productId = buyButton.getAttribute('data-id');


// Обработчик события на кнопку "Купить"
buyButton.addEventListener('click', function() {
    // Получаем id товара из атрибута data-id кнопки
    const productId = buyButton.getAttribute('data-id');
    // checkerForEnability(productId);
    // Вызываем функцию вычитания товара, передавая ей id товара
    subtractQuantity(productId);
});

// Кнопка возврата к каталогу
function redirectTo(url) {
    window.location.href = url;
}


// Получение информации о товаре при загрузке страницы
$(document).ready(function() {
    $.post(
        "admin/core.php",
        {
            "action": "getProductInfo",
            "sid": parseInt(productId),
        },
        function(data, status) {
            const productInfo = JSON.parse(data);
            const availableQuantity = parseInt(productInfo.available_quantity);

            if (availableQuantity === 0) {
                // Если товара нет в наличии, выводим сообщение и отключаем кнопку
                buyButton.disabled = true;
                
                alert("К сожалению, этого товара в настоящее время нет в наличии.");
            }
        }
    );
});

function subtractQuantity(productId) {
    $.post(
        "admin/core.php",
        {
            "action" : "subtractQuantity",
            "sid" : parseInt(productId),
        }
    );
    alert("Спасибо за покупку.");
    location.reload();
}


