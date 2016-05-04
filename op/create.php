<?php

$goods = array(
    'name' => '',
    'id_warehouse' => '',
    'price' => 0,
    'number' => 1,
);

if (!empty($_POST['save'])) {
    $sth = $pdo->prepare('INSERT INTO goods (name, price, number, id_warehouse) VALUES (:name, :price, :number, :id_warehouse)');
    $sth->execute(array(
        ':name' => $_POST['name'],
        ':price' => $_POST['price'],
        ':number' => $_POST['number'],
        ':id_warehouse' => $_POST['id_warehouse'],
    ));

    header('Location: index.php');
    exit;
}

$warehouses = get_available_warehouses();

ob_start();

require __DIR__ . '/../view/form.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
