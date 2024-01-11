<?php
$dischi = json_decode(file_get_contents(__DIR__ . '/dischi.json'), true);
$response = [];

if(!empty($_GET['info'])){
    // se come parametro c'è info e non è vuoto
    $response = $dischi[$_GET['info']];
}else{
    // valore di default
    foreach($dischi as $disco => $info){
        $response[] = [$disco, $info['image']];
    }
}
header("Content-Type: application/json");
echo json_encode($response);

?>