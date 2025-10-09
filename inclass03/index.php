<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="imageFile"/>
    <input type="submit" name="submit"/>

</form>

<?php
if(isset($_POST['submit'])){
    if(($_FILES['imageFile']['type'] == "image/jpeg")||
        ($_FILES['imageFile']['type'] == "image/png")||
        ($_FILES['imageFile']['type'] == "image/gif")){
        if($_FILES['imageFile']['size'] < 10000000){


    if($_FILES['imageFile']['error'] > 0){
        echo "STUPID!!!!!";
    }else{
        echo "Name: " . $_FILES['imageFile']['name']. "<br>";
        echo "Type: " . $_FILES['imageFile']['type']. "<br>";
        echo "Size: " . $_FILES['imageFile']['size'] /1024 . "<br>";
        echo "Temp file: " . $_FILES['imageFile']['tmp_name']. "<br>";

        if(file_exists("img/".$_FILES['imageFile']['name'])){
            echo "File already exists you stupid f....";
        }else{
            move_uploaded_file($_FILES['imageFile']['tmp_name'],
                "img/".$_FILES['imageFile']['name']);
            $mySQLi = mysqli_connect("localhost", "kim", "123456");
            mysqli_select_db($mySQLi, "imgy");
            $filename = $_FILES['imageFile']['name'];
            $sql = "INSERT INTO images (imageFile) VALUES ('$filename')";
            mysqli_query($mySQLi, $sql);
        }
    }
        }
    }

}