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
                <span>Gacaferi </span>
            </h3>
            <label for="sidebar-toggle" class="fas fa-navicon"></label>
            
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    
                    <a href="admin-panel.php"><span class="fas fa-home"></span><span>Main</span></a>
                </li>
                <li>
                    <a href="property-m.php"><span class="fas fa-folder"></span><span>Property Management</span></a>
                </li>
                <li>
                    <a href="feedback.php"><span class="fas fa-clipboard"></span><span>Query</span></a>
                </li>
                <li>
                    <a href="sellingOffers.html"><span class="fas fa-book"></span><span>Selling Offers</span></a></li>
                <li>
                    <a href="index.php"><span class="fas fa-sign-out"></span><span>Logout</span></a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="main-content">
        <h2>Shto Pronë të Re</h2>

        <form action="save-added-properties.php" method="post" enctype="multipart/form-data">
            <label for="property-type">Tipi i Pronës:</label>

            <select name="property-type" id="property-type" required>
            <?php
            
             include "connect.php";  
             $sql = "SELECT * FROM property_type";
             $result = $conn->query($sql);

             while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['property_type'] . "</option>";
            }
            ?>
            </select>

            
            <label for="size">Sipërfaqja:</label>
            <input type="text" id="size" name="size" required>

            <label for="price">Çmimi:</label>
            <input type="text" id="price" name="price" required>

            <label for="location">Shteti:</label>
            <input type="text" id="location" name="state" required>
            
            <label for="location">Qyteti:</label>
            <input type="text" id="location" name="city" required>
            
            <label for="location">Adresa:</label>
            <input type="text" id="location" name="address" required>

            <label for="property-status">Statusi i Pronës:</label>
            <select name="property-status" id="property-status" required>
            <?php

                $status_sql = "SELECT * FROM status";
                $status_result = $conn->query($status_sql);

                while ($status_row = $status_result->fetch_assoc()) {
                echo "<option value='" . $status_row['id'] . "'>" . $status_row['status'] . "</option>";
                 }
            ?>           
            </select>

            <label for="description">Përshkrimi:</label>
            <textarea id="description" name="description" rows="15" required></textarea>

            <label for="image">Shto Imazhe:</label>
            <input type="file" id="image" name="image[]" accept="image/*" multiple>


            <button type="submit">Shto Pronën</button>
        </form>
    </div>



    
</body>
</html>
