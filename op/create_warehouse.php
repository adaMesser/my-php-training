<?php


if (!empty($_POST['save'])) {
    $sth = $pdo->prepare('INSERT INTO warehouses (name) VALUES (:name)');
    $sth->execute(array(
        ':name' => $_POST['name'],
    ));

    header('Location: index.php');
    exit;
}

$warehouses = get_available_warehouses();

ob_start();

require __DIR__ . '/../view/form_warehouse.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
