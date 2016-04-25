<?php
//calculation functions
require_once('results.php');

$options = array(
    'dice_type' => isset($_POST['facet']) ? $_POST['facet'] : 6,
    'min_value' => isset($_POST['min_value']) ? $_POST['min_value'] : 1,
    'count' => isset($_POST['throw']) ? $_POST['throw']: 0,
    'trigger' => isset($_POST['trigger']) ? $_POST['trigger'] : 0,
    'command' =>isset($_POST['command']) ? $_POST['command'] : '',
);

if(!empty($_POST)) {
  include_once('show_results.php');
} else {
  include_once('main.php');
}
