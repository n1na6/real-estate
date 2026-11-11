<?php
include "connect.php";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $property_type_id = $_POST['property-type'];
    $status_id = $_POST['property-status'];  
    $size = $_POST['size'];
    $price = $_POST['price'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    $sql = "INSERT INTO property (property_typeID, status, square_meters, price, state, city, address, description) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("iissssss", $property_type_id, $status_id, $size, $price, $state, $city, $address, $description);

        if ($stmt->execute()) {
            $property_id = $stmt->insert_id;

            if (isset($_FILES['image']) && !empty($_FILES['image']['name'][0])) {

                foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {

                    $image_name = $_FILES['image']['name'][$key];
                    $image_tmp = $_FILES['image']['tmp_name'][$key];
                    $image_size = $_FILES['image']['size'][$key];
                    $image_error = $_FILES['image']['error'][$key];

                    if ($image_error === 0) {
                        $image_unique_name = uniqid('', true) . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
                        $image_path = "uploads/" . $image_unique_name;

                        if (move_uploaded_file($image_tmp, $image_path)) {
                            $image_sql = "INSERT INTO images (property_id, image_path) VALUES (?, ?)";
                            if ($image_stmt = $conn->prepare($image_sql)) {
                                $image_stmt->bind_param("is", $property_id, $image_path);
                                $image_stmt->execute();
                                $image_stmt->close();
                            }
                        }
                    }
                }
            }

            echo "<script>
                    alert('Prona u Shtua me sukses.');
                    window.location.href = 'property-m.php'; 
                  </script>";
        } else {
            echo "Error: " .$stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error ne query " . $conn->error;
    }

    $conn->close();
}
?>
