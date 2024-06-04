$(document).ready(function() {
  const addToCartButtons = $('.add-to-cart');

  addToCartButtons.on('click', function() {
      const id = $(this).data('id');

      $.ajax({
          url: '/php/addToCart.php', // Путь к вашему PHP файлу
          method: 'POST',
          data: {
              id: id
          },
          success: function(response) {
              if (response === 'success') {
                  console.log('Товар добавлен в корзину!');
                  // Обновление отображения корзины (опционально)
              } else if (response === 'out_of_stock') {
                  console.error('Товар закончился!');
                  alert('Извините, данный товар закончился на складе.');
              } else {
                  console.error('Ошибка добавления товара:', response);
              }
          },
          error: function(error) {
              console.error('Не удалось добавить товар:', error);
          }
      });
  });
});


