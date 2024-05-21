<?php
session_start();
require_once('admin/function.php');
$conn = connect();

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "SELECT quantity, availible_quantity FROM goods WHERE id = $id"; // Replace with your table name
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $availible_quantity = $row['availible_quantity'];
    $quantity =  $row['quantity'];

    if ($availableQuantity > $quantity) {
        $quantity = $quantity + 1;

        $sql = "UPDATE goods SET quantity = $quantity WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
        echo "error: update_failed";
        exit;
        }

        echo "success";
    } else {
        echo "out_of_stock";
    }
    } else {
    // Handle product not found case (optional)
    echo "error: product_not_found";
    exit;
    }
}
else {
    // Handle the case when 'id' is not set or null
    echo "Error: Missing product ID";
    exit;
  }

mysqli_close($conn);
?>
