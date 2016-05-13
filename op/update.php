<?php

$sth = $pdo->prepare('SELECT * FROM goods WHERE id = :id');
$sth->execute(array(':id' => $_GET['id']));

if ($goods = $sth->fetch(PDO::FETCH_ASSOC)) {

    if (!empty($_POST['save'])) {
        $sth = $pdo->prepare('UPDATE goods SET name = :name, price = :price, number = :number, id_warehouse = :id_warehouse WHERE id = :id');

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
