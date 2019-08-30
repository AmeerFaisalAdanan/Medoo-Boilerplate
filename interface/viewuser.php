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


$jsonResult = $datas;


//REST url
//http://localhost/MedooAPI/index.php?interface=viewuser&username=

// REST url with data
//http://localhost/MedooAPI/index.php?interface=viewuser&username=john%20doe
