<?php

$albumsContent = file_get_contents('./dischi.json');


$albumList = json_decode($albumsContent);
header("Content-Type: application/json");



echo json_encode($albumList);
