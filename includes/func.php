<?php

function get_available_warehouses()
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM warehouses ORDER BY id ASC');
    $sth->execute();

    $warehouses = array();
    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        $warehouses[] = $row;
    }

    return $warehouses;
}