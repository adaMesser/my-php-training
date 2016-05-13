<?php

if (!empty($_POST['save'])) {
    $sth = $pdo->prepare('INSERT INTO goods (name, price, number, id_warehouse) VALUES (:name, :price, :number, :id_warehouse)');

    if(!empty($_POST['name'])){
        $name=$_POST['name'];
    }else{
        $error = 'Undefined name';
        //header('Location: index.php');
        ob_start();
        require __DIR__ . '/../view/error.php';
        $content = ob_get_clean();
        require __DIR__ . '/../view/main.php';
        exit;
    }
    if(is_numeric($_POST['price'])){
        $price = $_POST['price'];
    }else{
        $price = 0;
    }
    if(is_numeric($_POST['number'])){
        $number = $_POST['number'];
    }else{
        $number = 0;
    }

    if(is_numeric($_POST['id_warehouse'])){
        $id_warehouse = $_POST['id_warehouse'];
    }else{
        $error = 'Undefined warehouse';
        //header('Location: index.php');
        ob_start();
        require __DIR__ . '/../view/error.php';
        $content = ob_get_clean();
        require __DIR__ . '/../view/main.php';
        exit;
    }
    $sth->execute(array(
        ':name' => $name,
        ':price' => $price,
        ':number' => $number,
        ':id_warehouse' => $id_warehouse,
    ));

    header('Location: index.php');
    exit;
}

$warehouses = get_available_warehouses();

ob_start();

require __DIR__ . '/../view/form.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
