<?php

require __DIR__ . '/includes/db_connect.php';
require __DIR__ . '/includes/func.php';

$op = isset($_GET['op']) ? $_GET['op'] : NULL;
switch ($op) {
    case 'create':
        require __DIR__ . '/op/create.php';
        break;

    case 'update':
        require __DIR__ . '/op/update.php';
        break;

    case 'delete':
        require __DIR__ . '/op/delete.php';
        break;

    default:
        require __DIR__ . '/op/index.php';
}
