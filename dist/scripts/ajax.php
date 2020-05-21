<?php 
require __DIR__ . "/data.php";

$index = $_GET['author'];
$thisAuthor = [];

foreach ($albums as $album){
    if (in_array($index, $album)){
        $thisAuthor[] = $album;
    }
}

header('Content-Type: application/json');
echo json_encode($thisAuthor);
//echo json_encode($albums[$index]);
?>