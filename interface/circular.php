<?php



$pType = $_GET["Type"];

// $datas = $database->query("SELECT circular.id, circular.type,circular.value FROM circular")->fetchAll();
// $database->fetchAll();




$datas = $database->select("circular", [
    "id",
    "value"
],[
    "type" => $pType
]);


// $datas = $database->query("SELECT hs_code FROM ntp_shipment_item") -> fetchAll();

// $array = json_decode($datas);


$jsonResult = $datas;



//http://localhost/kastam-faq/rest/api/index.php?interface=circular&Type=enforcement_date
