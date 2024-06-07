var catalog = {};
const edit = document.querySelector('.edit-profile-form');

function init(){
    $.post(
        "admin/core.php",
        {
            "action" : "loadProfile"
        },
        profileOut
    );
}

// Вывод профиля из базы
function profileOut(data){
    data = JSON.parse(data);
    catalog = data
    var out='';

    if (data.length === 0) {
        // Если пусто, создайте и добавьте элемент сообщения
        out += '<div class="no-user-message">Пользователь не зарегистрирован</div>';
    }
    else {
        for(var key in data) {
            out +='<div class="prof-box">';
            out +=`<img class="prof-image rounded-[100px]" src="/images/${data[key].img}" alt="">`;
            out +=`<p class="usname">${data[key].username}</p>`;
            out +=`<div class="us-login">${data[key].login}</div>`;
            out +=`<div class="us-email">${data[key].email}</div>`;
            out +='</div>';  
        }
    }
    $('.prof-out').html(out)
};

document.addEventListener('DOMContentLoaded', function() {
    // Добавляем обработчик клика на кнопку изменения профиля
    document.getElementById('edit-profile-btn').addEventListener('click', function() {
        // Отображаем форму редактирования профиля
        if (edit.classList.contains("disable-form")) {
            edit.classList.remove("disable-form")
            edit.classList.add("enable-form") 
        }
        else if (edit.classList.contains("enable-form")) {
            edit.classList.remove("enable-form") 
            edit.classList.add("disable-form") 
        }    
    });
});



$(document).ready(() => {
    init();

    $('#profileForm').on('submit', function(e){
        e.preventDefault();

        var formData = {
            "action": "updateProfile",
            "img": $('#img').val(),
            "username": $('#username').val(),
            "login": $('#login').val(),
            "email": $('#email').val(),
            "password": $('#password').val()
        };

        $.post(
            "admin/core.php",
            formData, function(response){
            if(response == "1"){
                alert("Профиль успешно обновлен");
                // Выполняем запрос на сервер для завершения текущей сессии(затычка так как после обновления не видит данные текущей сесии)
                $.get("login-signup-form/logout.php", function(data) {
                    // После завершения сессии перезагружаем страницу
                    location.reload();
                });

                // location.reload(); // Перезагрузка страницы для отображения обновленных данных
            } else {
                alert("Ошибка при обновлении профиля: " + response);
            }
        });
    });

    // $('#edit-profile-btn').on('click', function() {
    //     // Отображаем форму редактирования профиля
    //     if (edit.classList.contains('enable-form')) {
    //         edit.classList.remove('enable-form') 
    //         edit.classList.remove('enable-form')
    //     }
    //     else {
    //         edit.classList.add('disable-form')
    //         edit.classList.add('disable-form')
    //     }      
    // });
})