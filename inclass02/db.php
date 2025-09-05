<?php
require ('includes/conn.php');
$stmt = $db -> prepare("SELECT * FROM `user`");
try{
    $stmt->execute();
}catch (PDOException $e){echo $e->getMessage();}
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['ID'];
    echo $row['fname'];
    echo $row['lname'];
    echo $row['age'];
    echo "<br>";
}