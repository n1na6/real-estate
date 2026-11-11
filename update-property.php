<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $propertyId = $_POST['ID'];
    $propertyType = $_POST['property-type'];
    $status = $_POST['property-status'];
    $squareMeters = $_POST['size'];
    $price = $_POST['price'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    $sql = "UPDATE property 
            SET property_typeID = ?, status = ?, square_meters = ?, price = ?, state = ?, city = ?, address = ?, description = ? 
            WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('isidssssi', $propertyType, $status, $squareMeters, $price, $state, $city, $address, $description, $propertyId);

    if ($stmt->execute()) {
        header('Location: property-m.php?status=updated');
        exit();
    } else {
        header('Location: property-m.php?status=update_error');
        exit();
    }

    $stmt->close();
}


$conn->close();
?>
