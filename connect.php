<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbName = "realestateweb";

$conn = new mysqli($servername, $username, $password, $dbName);


if($conn -> connect_error){
    die("connection failed: ". $conn->connect_error);
}
else {echo "nuk u lidh"; } 

/*
$user = $_POST['username'];
$pass =md5($_POST['password']);

$sql = "select * from user where username = '$user' and password ='$pass'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "logini i suksesshem mire se vjen ".$user;
}else{
    echo "kredenciale te gabuara";
}
$conn->close();*/

?>