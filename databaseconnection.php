<?php
$conn = new mysqli("localhost", "root", "", "dolgozok");
//var_dump($keresfutar);
if($conn->connect_error)
    die("Connection error: " . $conn->connect_error);
$conn->set_charset("utf8");