<?php
$disk_value = file_get_contents('dischi.json');
$disk_array = json_decode($disk_value, true);
$response = [
    'results' => $disk_array,
    'success' => true
];
var_dump($response);
header('Content-Type: application/json');
echo json_encode($response);
