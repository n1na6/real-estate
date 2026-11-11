<?php
include "connect.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>feedback</title>
    <link rel="stylesheet" href="feedback.css">

</head>
<body>



    <input type="checkbox" id="sidebar-toggle">

    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="fas fa-user"></span>
                <span>Admin </span>
            </h3>
            <label for="sidebar-toggle" class="fas fa-navicon"></label>
            
        </div>
    
        <div class="sidebar-menu">
            <ul>
                <li>
                    
                    <a href="admin-panel.php"><span class="fas fa-home"></span><span>Main</span></a>
                </li>
                <li>
                    <a href="property-m.php"><span class="fas fa-folder"></span><span>Menaxhimi i Pronave</span></a>
                </li>
                <li>
                    <a href="feedback.php"><span class="fas fa-clipboard"></span><span>Mesazhet</span></a>
                </li>
                <li>
                    <a href="sellingOffers.html"><span class="fas fa-book"></span><span>Ofertat për Shitje</span></a>                </li>
                <li>
                    <a href="index.php"><span class="fas fa-sign-out"></span><span>Logout</span></a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="main-content">
        <h2>Kontakti Dhe Mesazhet</h2>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Emri</th>
                    <th>Email</th>
                    <th>Lloji i Mesazhit</th>
                    <th>Mesazhi</th>
                    <th>Fshije</th>
                </tr>
            </thead>
           <!-- <tbody>
                <tr>
                    <td>Filan Fisteku</td>
                    <td>Filan.fisteku@example.com</td>
                    <td>Për një pronë</td>
                    <td>Jam i interesura për një pronë që nuk ishte e listuar në website .</td>
                    <td><button class="deletebtn" type="input">Delete</button></td>
                </tr>
                <tr>
                    <td>Filan Fisteku2</td>
                    <td>fisteku.f@example.com</td>
                    <td>Problem me website</td>
                    <td>Një nga butonat e pronave nuk është funksional .</td>
                    <td><button class="deletebtn" type="input">Delete</button></td>
                </tr>
        
            
            </tbody> -->
        <tbody> 

    <?php
     $sql="SELECT * From contact";

     $result =$conn->query($sql);

     if($result->num_rows>0){

      while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["ID"]. "</td><td>".$row["name"]. "</td><td>".$row["surname"]. "</td><td>".$row["email"]. "</td><td>".$row["message"]. "</td>";
        echo "<td><button><a href='delete-feedback.php?ID=".$row["ID"]."' onclick='return confirm(\"Ajeni sigurt per me fshi\")'>Fshije</a></button></td>";
        echo"</tr>";
     }
     }else{
      echo "Nuk ka Dhena";
     }
     $conn->close();

    ?>
</tbody>
</table>
</div>

  

    
</body>
</html>