<?php
$user = "kim";
$pass = "123456";
function dbCon($user, $pass){
try {
    $dbCon = new PDO('mysql:host=localhost;dbname=backend;charset=utf8', $user, $pass);
    return $dbCon;
} catch (PDOException $err) {
    echo "Error!: " . $err->getMessage() . "<br/>";
    die();
}}

