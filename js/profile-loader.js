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
            if (data[key].img) {
                out +=`<img class="prof-image rounded-[100px]" src="admin/uploads/${data[key].img}" alt="">`;
            } else {
                // Если изображение отсутствует, вставляем заменяющее изображение
                out +=`<img class="prof-image rounded-[100px]" src="admin/uploads/no-ava.png" alt="">`;
            }
            out +='<div class="flex flex-row">';
            out +='<label>Ваше имя:</label>';
            out +=`<p class="usname"> ${data[key].username}</p>`;
            out +='</div>';
            out +='<div class="flex flex-row">';
            out +='<label>Ваш логин:</label>';  
            out +=`<div class="us-login"> ${data[key].login}</div>`;
            out +='</div>'; 
            out +='<div class="flex flex-row">';
            out +='<label>Ваш Email:</label>'; 
            out +=`<div class="us-email"> ${data[key].email}</div>`;
            out +='</div>'; 
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
    
        var formData = new FormData();

        if ($('#fileToUpload').get(0).files.length === 0) {
            formData.append("fileToUpload", 'no-ava.png');
        }

        formData.append("action", "updateProfile");
        formData.append("username", $('#username').val());
        formData.append("login", $('#login').val());
        formData.append("email", $('#email').val());
        formData.append("password", $('#password').val());
        formData.append("fileToUpload", $('#fileToUpload')[0].files[0]);
    
        $.ajax({
            url: "admin/core.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if(response == "1"){
                    alert("Профиль успешно обновлен");
                    // Выполняем запрос на сервер для завершения текущей сессии(затычка так как после обновления не видит данные текущей сесии)
                    // $.get("login-signup-form/logout.php", function(data) {
                        // После завершения сессии перезагружаем страницу
                        // location.reload();
                    // });
    
                    window.location.href = "/profile.php" // Перезагрузка страницы для отображения обновленных данных
                } else {
                    alert("Ошибка при обновлении профиля: " + response);
                }
            }
        });
    });
    
})