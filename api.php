<?php
$dischi = json_decode(file_get_contents(__DIR__ . '/dischi.json'));
$response = [];

foreach($dischi as $disco => $info){
    $response[] = $disco;
}
header("Content-Type: application/json");
echo json_encode($response);

?>