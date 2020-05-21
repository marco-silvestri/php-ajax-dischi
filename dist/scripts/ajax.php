<?php 
require __DIR__ . "/data.php";
header('Content-Type: application/json');
echo json_encode($albums);
?>