<?php


//example with SELECT statement



$username = $_GET["username"];

$datas = $database->select("user",
    //select column
    [
        "userid",
        "username",
        "email",
        "password"
    ],
    //where statement
    [
        "username" => $username
    ]
);


// $datas = $database->query("SELECT hs_code FROM ntp_shipment_item") -> fetchAll();

// $array = json_decode($datas);


$jsonResult = $datas;


//REST url
//http://localhost/MedooAPI/index.php?interface=viewuser&username=

// REST url with data
//http://localhost/MedooAPI/index.php?interface=viewuser&username=john%20doe
