<?php
include "connect.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"];
    $passwordi=$_POST["password"];

    $sql=$conn->prepare("SELECT username, pass FROM user WHERE username=?");
    $sql->bind_param("s",$username);

    $sql->execute();
    $result=$sql->get_result();
  
    if($result->num_rows>0){
      $row =$result->fetch_assoc();    

        if(password_verify($passwordi, $row["pass"])){
         
          header("Location: admin-panel.php");
          exit();
    }
   else{
        echo "nuk u gjet useri";
      }
  
    $sql->close();
  
  }
  $conn->close();
}

?>