<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $propertyId = $_POST['id'];

    if (!empty($propertyId) && is_numeric($propertyId)) {

        $sql = "DELETE FROM property WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $propertyId);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Prona u fshi me sukses.');
                    window.location.href = 'property-m.php'; 
                  </script>";
        } else {
            echo "<script>alert('Error, Prona nuk u fshi.');</script>";
        }

        $stmt->close();
    } else {
        echo 
        "<script>
         alert('ID jovalide.');
         window.location.href = 'property-m.php'; 
        </script>";
    }
}


$conn->close();
?>
