<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "db connected";
}

if(isset($_POST['submit']))
{
if(isset($_FILES['image'])) {
        $name=$_POST['image_name'];
        $fp=addslashes(file_get_contents($_FILES['image']['tmp_name'])); //will store the image to fp
        }
                // our sql query
                $sql = "INSERT INTO images VALUES('null', '{$name}','{$fp}');";
                            mysql_query($sql) or die("Error in Query insert: " . mysql_error());
} 

?>