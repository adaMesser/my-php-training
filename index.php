<?php
//calculation functions
require_once('results.php');

$options = array(
    'command' => isset($_POST['command']) ? $_POST['command'] : '',
);
//если переменная $_POST не пустая
if (!empty($_POST)) {
    include_once('show_results.php'); //вывод результата
} else {
    include_once('main.php');  //иначе вывод формы для ввода команды
}
