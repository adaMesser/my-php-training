<?php
//возвращает массив из count случайных элементов
//от 1 до  dice_type
function get_dice_results($dice_type, $count)
{
    $results = array();
    for ($i = 0; $i < $count; $i++) {
        $results[] = rand(1, $dice_type);
    }
    return $results;
}

function filter_wrapper($dice_type, $count, $trigger, $comparison_sign, $value)
{
    $results = [];
    //получаем значение массива count случайных чисел
    $result_tmp = get_dice_results($dice_type, $count);

    //фильтруем значения в зависимости от знака сравнения
    switch ($comparison_sign) {
        case '<':
            foreach ($result_tmp as $res_val) {//перебор значений массива
                if ($res_val < $value) { //если значение удовл. условию
                    $results[] = $res_val; //записываем в результирующий массив
                }
            }
            break;
        case '<=':
            foreach ($result_tmp as $res_val) {
                if ($res_val <= $value) {
                    $results[] = $res_val;
                }
            }
            break;
        case '>';
            foreach ($result_tmp as $res_val) {
                if ($res_val > $value) {
                    $results[] = $res_val;
                }
            }
            break;
        case '>=';
            foreach ($result_tmp as $res_val) {
                if ($res_val >= $value) {
                    $results[] = $res_val;
                }
            }
            break;
        case '=';
            foreach ($result_tmp as $res_val) {
                if ($res_val == $value) {
                    $results[] = $res_val;
                }
            }
            break;
        default;
            $results = $result_tmp;
            break;
    }

    //если указан порядок сортировки asc (по возрастанию)
    if ($trigger == 'asc') {
        sort($results);
    }  //если указан обратный порядок сортировки
    elseif ($trigger == 'desc') {
        rsort($results);
    }
    return $results;

}

function parser($command)
{
    // деление строчки command на элементы массива по пробелам
    $arr = explode(' ', $command);

    $trigger = 0;
    $comparison_sign = '';
    $value = 0;
    //проверка на наличие обязательного элемента throw
    //если первый элемент throw
    if ($arr[0] == 'throw') {
        //значит количество бросков count равно второму элементу массива
        $count = $arr[1];
    } else {
        header('Location: index.php');
        exit('error '); //иначе команда введена неправильно

    }

    //проверка на наличие обязательного элемента d
    //если третий элемент начинается с d
    if (strpos($arr[2], 'd') == 0) {
        //тогда количество граней куба равно значению, записаному после d
        $dice_type = substr($arr[2], 1);
    } else {
        header('Location: index.php');
        exit('error ');//иначе команда введена неправильно

    }

    //проверка на наличие фильтра
    //если четвертый элемент команды равен filter
    if (isset($arr[3])) {
        if ($arr[3] == 'filter') {
            //значит знак сравнения равен пятому элементу команды
            $comparison_sign = $arr[4];
            //а сравниваемое значение равно 6му элементу команды
            $value = $arr[5];
            if (isset($arr[6])) {
                if ($arr[6] == 'sort') {//если фильтр есть, тогда если 7й элем команды равен sort
                    $trigger = $arr[7]; //тогда триггер равен 8му элементу команды
                }
            }
        }
    }

    //проверка на наличие параметра сортировки
    //если четвертый элем. команды равен sort (отсутствует фильтр)
    if (isset($arr[3])) {
        if ($arr[3] == 'sort') {
            $trigger = $arr[4]; //значит триггер равен пятому элем. команды
        }
    }

    //передаем полученые параметры в filter_wrapper для генерации результирующего массива
    return filter_wrapper($dice_type, $count, $trigger, $comparison_sign, $value);
}
