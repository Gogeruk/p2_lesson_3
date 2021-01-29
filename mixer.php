<?php

require "class_mix_fin.php";

// Get values
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = $_GET["q"];
    $response = json_decode($data, true);

    // Proces values
    $col1 = new color($response["red1"], $response["green1"], $response["blue1"]);
    $col2 = new color($response["red2"], $response["green2"], $response["blue2"]);

    // crete an array of object colors
    $checked_colors = [
        "mixed_red"  => $col1->mix_me_dady($col1, $col2)[0],
        "mixed_green"  => $col1->mix_me_dady($col1, $col2)[1],
        "mixed_blue"  => $col1->mix_me_dady($col1, $col2)[2]
    ];

    echo json_encode($checked_colors);

}




































?>
