<?php
include "connect.php";

$name=$_POST["name"];
$lastName=$_POST["lastname"];
$email=$_POST["email"];
$description=$_POST["description"];

$sql="INSERT INTO  contact (name, surname, email, message)
 VALUES ('$name','$lastName','$email','$description')";

if($conn->query($sql)===TRUE){
    echo "Të dhënat u regjistruan";
   header("Location: contact.html");
   exit();

}else{
    echo"Gabim".$sql."<br>".$conn->error;
}

$conn->close();

?>
