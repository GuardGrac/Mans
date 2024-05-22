const addToCartButtons = document.querySelectorAll('.add-to-cart');
console.log("sos");

addToCartButtons.forEach(button => {
  button.addEventListener('click', () => {
    const id = button.dataset.id;

    $.ajax({
      url: 'php/addToCart.php',
      method: 'POST',
      data: {
        id: id
      },
      success: function(response) {
        if (response === 'success') {
          console.log('Товар добавлен в корзину!');
          // Update cart display (optional)
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
