<?php
require ('includes/conn.php');

if(isset($_POST['submit'])){

    if(isset($_POST['fname']) &&
        isset($_POST['lname']) &&
        isset($_POST['age'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];

        $query = $db->prepare("INSERT INTO `user` (`ID`, `fname`, `lname`, `age`)
        VALUES (NULL, :fname, :lname, :age);");

        $query->bindParam(':fname', $fname);
        $query->bindParam(':lname', $lname);
        $query->bindParam(':age', $age);

        $query->execute();
    }


}