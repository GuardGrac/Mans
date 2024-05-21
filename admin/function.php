<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Alpha-db";
session_start();

function connect(){
    $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf8");
    return $conn;
}

function init() {
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT id, name FROM goods";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $out = array();
        while($row = mysqli_fetch_assoc($result)){
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    }
    else{
        echo "0";
    }
    mysqli_close($conn);
}

function selectOneGoods(){
    $conn = connect();
    $id = $_POST['gid'];
    $sql = "SELECT * FROM goods WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    }
    else{
        echo "0";
    }
    mysqli_close($conn);
}

function updateGoods(){
    echo "0";
    $conn = connect();
    $id = $_POST['id'];
    $name = $_POST['gname'];
    $cost = $_POST['gcost'];
    $descr = $_POST['gdescr'];
    $ord = $_POST['gorder'];
    $img = $_POST['gimg'];
    $color = $_POST['gcolor'];
    $size = $_POST['gsize'];
    $avail_quan = $_POST['gavail_quan'];
    $categ = $_POST['gcateg'];
    $struct = $_POST['gstruct'];

    $sql = "UPDATE goods SET name = '$name',
     cost = '$cost',
      description = '$descr',
       ord = '$ord',
        img = '$img',
         color = '$color',
          size = '$size',
           available_quantity = '$avail_quan',
            category = '$categ',
             structure = '$struct'
         WHERE id = '$id' ";

        if(mysqli_query($conn, $sql)){
            echo "1";
        }
        else{
            echo "Error update record:" . mysqli_error($conn);
        }

    mysqli_close($conn);
}

function newGoods(){
    $conn = connect();
    $name = $_POST['gname'];
    $cost = $_POST['gcost'];
    $descr = $_POST['gdescr'];
    $ord = $_POST['gorder'];
    $img = $_POST['gimg'];
    $color = $_POST['gcolor'];
    $size = $_POST['gsize'];
    $avail_quan = $_POST['gavail_quan'];
    $categ = $_POST['gcateg'];
    $struct = $_POST['gstruct'];

    $sql = "INSERT INTO goods(name, cost, description, ord, img, color, size, available_quantity, category, structure)
    VALUES('$name', '$cost', '$descr', '$ord', '$img', '$color', '$size', '$avail_quan', '$categ', '$struct')";

        if(mysqli_query($conn, $sql)){
            echo "1";
        }
        else{
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }

    mysqli_close($conn);
}

function loadGoods(){
    $conn = connect();
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $out = array();
        while($row = mysqli_fetch_assoc($result)){
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    }
    else{
        echo "0";
    }
    mysqli_close($conn);
}

function loadProfile(){
    $conn = connect();
    $usname = $_SESSION['username'];
    $passw = $_SESSION['password'];
    $sql = "SELECT * FROM users WHERE username = '$usname'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    }
    else{
        echo "0";
    }
    mysqli_close($conn);
}


function loadCart(){
    $conn = connect();
    $usname = $_SESSION['username'];
    $passw = $_SESSION['password'];
    
    $sql = "
    SELECT 
        `user_cart`.`id`, 
        `user_cart`.`quantity`, 
        `goods`.`id` AS 'id_goods',
        `goods`.`name`,
        `goods`.`cost`,
        `goods`.`description`,
        `goods`.`img`,
        `goods`.`category`,
        `goods`.`color`,
        `goods`.`size`,
        `goods`.`structure`,
        `goods`.`available_quantity`
        FROM `user_cart`
    INNER JOIN 
        users ON user_cart.id_users = users.id 
    INNER JOIN 
        goods ON user_cart.id_goods = goods.id 
    WHERE `id_users` = (SELECT `id` FROM `users` WHERE `username` = '$usname');
    ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $out = array();

        while($row = mysqli_fetch_assoc($result)){
            $out[$row["id"]] = $row;
        }

        echo json_encode($out);
    }
    else{
        echo "0";
    }
    mysqli_close($conn);
}


function saveCart(){    
    $conn = connect();
    $id = $_POST['id'];
    $count = $_POST['count'];
    
    $sql = "UPDATE `user_cart` SET `quantity`=$count WHERE `id` = $id";

    if(mysqli_query($conn, $sql)){
        echo "1";
    }
    else{
        echo "Error update record:" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function saveMiniCart(){    
    $conn = connect();
    $id_users = $_SESSION['id'];
    $id_goods = $_POST['id_goods'];
    $count = $_POST['count'];
    
    $sql = "UPDATE `user_cart` SET `quantity`= $count WHERE `id_goods` = $id_goods AND `id_users` = $id_users";

    if(mysqli_query($conn, $sql)){
        echo "1";
    }
    else{
        echo "Error update record:" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


function deleteCart(){    
    $conn = connect();
    $id = $_POST['id'];
    
    $sql = "DELETE FROM `user_cart` WHERE `id` = $id";

    if(mysqli_query($conn, $sql)){
        echo "1";
    }
    else{
        echo "Error update record:" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function insertCart(){    
    $conn = connect();
    $id_users = $_SESSION['id'];
    $id_goods = $_POST['id_goods'];
    $quantity = 1;
    
    $sql = "INSERT INTO `user_cart`(`id_goods`, `id_users`, `quantity`) VALUES ($id_goods, $id_users, $quantity)";

    if(mysqli_query($conn, $sql)){
        echo "1";
    }
    else{
        echo "Error update record:" . mysqli_error($conn);
    }

    mysqli_close($conn);
}