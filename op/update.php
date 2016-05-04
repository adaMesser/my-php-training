<?php

$sth = $pdo->prepare('SELECT * FROM goods WHERE id = :id');
$sth->execute(array(':id' => $_GET['id']));

if ($goods = $sth->fetch(PDO::FETCH_ASSOC)) {

    if (!empty($_POST['save'])) {
        $sth = $pdo->prepare('UPDATE goods SET name = :name, price = :price, number = :number, id_warehouse = :id_warehouse WHERE id = :id');
        $sth->execute(array(
            ':name' => $_POST['name'],
            ':price' => $_POST['price'],
            ':number' => $_POST['number'],
            ':id_warehouse' => $_POST['id_warehouse'],
            ':id' => $_GET['id'],
        ));

        header('Location: index.php');
        exit;
    }

    $warehouses = get_available_warehouses();

    ob_start();

    require __DIR__ . '/../view/form.php';

    $content = ob_get_clean();

    require __DIR__ . '/../view/main.php';
}
