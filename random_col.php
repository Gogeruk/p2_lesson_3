<?php
require "class_mix_fin.php";

$col1 = new color(1, 1, 1);
$col1::ran_col($col1);
$ran_arr[] = $col1->get_red();
$ran_arr[] = $col1->get_green();
$ran_arr[] = $col1->get_blue();

echo json_encode($ran_arr);




?>
