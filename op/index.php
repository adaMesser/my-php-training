<?php

$sth = $pdo->prepare('SELECT
 goods.id,
 goods.name,
 goods.id_warehouse,
 goods.price,
 goods.number,
 warehouses.name AS warehouses
FROM goods
INNER JOIN warehouses ON goods.id_warehouse = warehouses.id
ORDER BY id ASC');
$sth->execute();

$goo = array();
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    $goo[] = $row;
}

ob_start();

require __DIR__ . '/../view/op_index.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
