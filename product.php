<?php
require('admin/function.php');
connect();
$conn = connect();

$query = "SELECT * FROM goods";
$result = mysqli_query($conn, $query);

$goods = array();
while ($row = mysqli_fetch_assoc($result)) {
    $goods[] = $row;
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM goods WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $goods = mysqli_fetch_assoc($result);
    } else {
        echo "Товар не найден.";
        exit;
    }
} else {
    echo "Неверный запрос.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($goods['name']); ?></title>
</head>
<body>
<h1><?php echo htmlspecialchars($goods['name']); ?></h1>
    <p><?php echo htmlspecialchars($goods['description']); ?></p>
    <p>Цена: <?php echo htmlspecialchars($goods['cost']); ?> руб.</p>
    <img src="/images/<?php echo htmlspecialchars($goods['img']); ?>" alt="<?php echo htmlspecialchars($goods['name']); ?>">
    <br>
    <a href="catalog.php">Вернуться к каталогу</a>
</body>
</html>