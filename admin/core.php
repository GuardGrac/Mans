<?php
$action = $_POST['action'];

require_once 'function.php';

switch ($action) {
    case 'init':
        init();
        break;
    case 'selectOneGoods':
        selectOneGoods();
        break;
    case 'updateGoods':
        updateGoods();
        break;
    case 'newGoods':
        newGoods();
        break;
    case 'loadGoods':
        loadGoods();
        break;
    case 'loadProfile':
        loadProfile();
        break;  
    case 'loadCart':
        loadCart();
        break;    
    case 'saveCart':
        saveCart();
        break;   
    case 'saveMiniCart':
        saveMiniCart();
        break;    
    case 'deleteCart':
        deleteCart();
        break;
    case 'insertCart':
        insertCart();
        break;
}