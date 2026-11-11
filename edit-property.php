<?php
include 'connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $propertyId = $_GET['id'];

    $sql = "SELECT * FROM property WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $propertyId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      #  $property = $result->fetch_assoc();
      $row=$result->fetch_assoc();
      $propertyId = $row['ID'];
      $propertyType = $row['property_typeID'];
      $status = $row['status'];
      $squareMeters = $row['square_meters'];
      $price = $row['price'];
      $state = $row['state'];
      $city = $row['city'];
      $address = $row['address'];
      
      $description = $row['description'];
    } else {
        echo '<p>Property not found.</p>';
        exit();
    }

    $stmt->close();
} else {
    echo '<p>Invalid property ID.</p>';
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
    <title>Add Properties</title>
    <link rel="stylesheet" href="add-property.css">
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
                    <a href="sellingOffers.html"><span class="fas fa-book"></span><span>Ofertat për shitje</span></a></li>
                <li>
                    <a href="index.html"><span class="fas fa-sign-out"></span><span>Logout</span></a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="main-content">
        <h2>Përditëso Pronën</h2>

        <form action="update-property.php" method="post" enctype="multipart/form-data">
            <label for="property-type">Tipi i Pronës:</label>

            <select name="property-type" id="property-type" required>
            <?php
         
             $sql = "SELECT * FROM property_type";
             $result = $conn->query($sql);

             while ($row = $result->fetch_assoc()) {
               $selected = ($row['ID'] == $propertyType) ? 'selected' : '';
               echo "<option value='" . $row['ID'] . "' $selected>" . htmlspecialchars($row['property_type']) . "</option>";
             }
            ?>
            </select>


            <label for="size">Sipërfaqja:</label>
            <input type="text" id="size" name="size"  value="<?php echo $squareMeters; ?>"required>

            <label for="price">Çmimi:</label>
            <input type="text" id="price" name="price"  value="<?php echo $price; ?>" required>

            <label for="location">Shteti:</label>
            <input type="text" id="location" name="state"  value="<?php echo $state; ?>" required>
            
            <label for="location">Qyteti:</label>
            <input type="text" id="location" name="city"  value="<?php echo $city; ?>"required>
            
            <label for="location">Adresa:</label>
            <input type="text" id="location" name="address"  value="<?php echo $address; ?>"required>

            <label for="property-status">Statusi i Pronës:</label>
            <select name="property-status" id="property-status" required>
             <?php
               $status_sql = "SELECT * FROM status";
               $status_result = $conn->query($status_sql);

              while ($status_row = $status_result->fetch_assoc()) {
                $selected = ($status_row['id'] == $status) ? 'selected' : '';
                echo "<option value='" . $status_row['id'] . "' $selected>" . htmlspecialchars($status_row['status']) . "</option>";
              }
              $conn->close();
             ?>
            </select>


            <label for="description">Përshkrimi:</label>
            <textarea id="description" name="description" rows="10" required><?php echo htmlspecialchars($description); ?></textarea>

            <input type="hidden" name="ID" value="<?php echo $propertyId; ?>">
            <button type="submit">Përditëso Pronën</button>
        </form>
    </div>


    
</body>
</html>
