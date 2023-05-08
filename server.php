<?php
$json_value = file_get_contents('dischi.json');
$disk_array = json_decode($json_value, true);
var_dump($disk_array);
