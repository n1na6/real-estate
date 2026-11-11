<?php

include 'connect.php';  

$sql = "SELECT p.ID, pt.property_type, ps.status, p.square_meters, p.price, p.state, p.city, p.address, p.description, 
            MIN(pi.image_path) AS thumbnail 
        FROM property p
        JOIN property_type pt ON p.property_typeID = pt.ID
        JOIN status ps ON p.status = ps.id
        LEFT JOIN  images pi ON p.ID = pi.property_id
        GROUP BY  p.ID, pt.property_type, ps.status, p.square_meters, p.price, p.state, p.city, p.address, p.description";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  
        echo '<div class="property-card">';
        echo '<div class="status">' . htmlspecialchars($row['status']) . '</div>';
        

        $imageSrc = $row['thumbnail'] ? $row['thumbnail'] : 'img/default-image.jpg';  
        echo '<img src="' . htmlspecialchars($imageSrc) . '" alt="Property Image">';
        
        echo '<div class="property-info">';
        echo '<h3>' . htmlspecialchars($row['property_type']) . '</h3>';
        echo '<p>&#128205 Lokacioni: ' . htmlspecialchars($row['city']) . '</p>';
        echo '<p>Sipërfaqja: ' . htmlspecialchars($row['square_meters']) . 'm²</p>';
        if($row['price'] > 0){
            echo '<p>Çmimi: ' . htmlspecialchars($row['price']) . '€</p>';
 
        }else{
            echo '<p>Çmimi: ' . htmlspecialchars("I diskutueshëm") . '</p>';
        }
        echo '</div>';
        

        echo '<a href="pproberty-details.php?id=' . $row['ID'] . '"><button>Shiko Detajet</button></a>';
        echo '</div>';
    }
} else {
    echo '<p>No properties found.</p>';
}


$conn->close();
?>
