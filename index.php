<?php
//calculation functions
require_once('results.php');

$options = array(
    'dice_type' => isset($_POST['facet']) ? $_POST['facet'] : 6,
    'value' => isset($_POST['value']) ? $_POST['value'] : 1,
    'count' => isset($_POST['throw']) ? $_POST['throw']: 0,
    'trigger' => isset($_POST['trigger']) ? $_POST['trigger'] : 0,
    'comparison_sign' => isset($_POST['comparison_sign']) ? $_POST['comparison_sign'] : '',
    'command' =>isset($_POST['command']) ? $_POST['command'] : '',
);

if(!empty($_POST)) {
  include_once('show_results.php');
} else {
  include_once('main.php');
}
