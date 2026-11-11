<?php
include "connect.php";


if (isset($_GET["ID"]) && is_numeric($_GET["ID"])) {
    $id = $_GET["ID"];

    
    $stmt = $conn->prepare("DELETE FROM contact WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: feedback.php");
        exit();
    } else {
        echo "Gabim: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "ID invalide.";
    header("Location: feedback.php");
}

$conn->close();
?>




/*$id=$_GET["ID"];

$sql="DELETE FROM contact WHERE ID=$id";

if($conn->query($sql)===TRUE){
    echo "U  fshi me sukses";
}else{
    echo "Gabim";
}
$conn->close();

header("Location: feedback.php");
exit();
*/

?>