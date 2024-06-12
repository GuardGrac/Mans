<?php
session_start();
if($_SESSION["role_id"] == 0){
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Panel</title>
</head>
<body class="flex justify-evenly ">
    <div class="flex flex-col items-center justify-center border-2 rounded-[5px] w-full">
        <h2 class="text-3xl font-bold py-10">Товар</h2>
        <div class="goods-out border-2 flex flex-col items-center justify-center mt-10 rounded-[5px] border-black mb-6 w-fit"></div>
        <div class="border-2 rounded-[5px] border-black">
            <p class="w-[550px] flex justify-between text-center items-center">Имя: <input class="border-2 w-[270px]" type="text" id="gname"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Стоимость: <input class="border-2 w-[270px]" type="text" id="gcost"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Описание: <textarea class="border-2 w-[270px]" id="gdescr"></textarea></p>
            <p class="w-[550px] flex justify-between text-center items-center">Изображение: <input class="border-2 w-[270px]" type="text" id="gimg"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Порядок: <input class="border-2 w-[270px]" type="text" id="gorder"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Цвет: <input class="border-2 w-[270px]" type="text" id="gcolor"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Размер(ы): <input class="border-2 w-[270px]" type="text" id="gsize"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Доступное количество(на складе): <input class="border-2 w-[270px]" type="text" id="gavail_quan"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Категория(и): <input class="border-2 w-[270px]" type="text" id="gcateg"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Структура: <input class="border-2 w-[270px]" type="text" id="gstruct"></p>
            <input type="hidden" id="gid">
        </div>
           
        <button class="add-to-db border-2 border-black rounded-[5px] mt-6">Обновить</button>
    </div>

    <div class="flex flex-col items-center justify-center border-2 rounded-[5px] w-full">
        <h2 class="text-3xl font-bold py-10">Пользователь</h2>
        <div class="users-out border-2 flex flex-col items-center justify-center mt-10 rounded-[5px] border-black mb-6 w-fit"></div>
        <div class="border-2 rounded-[5px] border-black">
            <p class="w-[550px] flex justify-between text-center items-center">Никнейм: <input class="border-2 w-[270px]" type="text" id="uname"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Логин: <input class="border-2 w-[270px]" type="text" id="ulogin"></p>
            <p class="w-[550px] flex justify-between text-center items-center">Пароль: <textarea class="border-2 w-[270px]" id="upassword"></textarea></p>
            <p class="w-[550px] flex justify-between text-center items-center">Email: <input class="border-2 w-[270px]" type="text" id="uemail"></p>
            <select class="w-[550px] flex justify-between text-center items-center" name="role_id" id="role_select">
                 <option value="0">0 Пользователь</option>
                 <option value="1">1 Админ</option>
            </select>
            <input type="hidden" name="urole_id" id="urole_id">
            <input type="hidden" id="uid">
        </div>
           
        <button class="add-to-db-user border-2 border-black rounded-[5px] mt-6">Обновить</button>
    </div>

    <script src="/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/admin/js/admin.js"></script>
    <script>
    document.getElementById("role_select").addEventListener("change", function() {
        var selectedOption = this.options[this.selectedIndex];
        var hiddenInput = document.getElementById("urole_id");
        hiddenInput.value = selectedOption.value;
    });
    </script>
</body>
</html>