<?php
include 'connect.php'; 

$sql = "SELECT p.ID, pt.property_type, ps.status, p.square_meters, p.state, p.city, p.address
        FROM property p
        JOIN property_type pt ON p.property_typeID = pt.ID
        JOIN status ps ON p.status = ps.id
        LEFT JOIN  images pi ON p.ID = pi.property_id
        GROUP BY  p.ID, pt.property_type, ps.status, p.square_meters, p.state, p.city, p.address
        ORDER BY p.created_at DESC
        LIMIT 5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['ID']}</td>
                <td>{$row['property_type']}</td>
                <td>{$row['square_meters']}</td>
                <td>{$row['address']}, {$row['city']}, {$row['state']}</td>
                <td>{$row['status']}</td>
              </tr>";
    }
} else {
    
}

$conn->close();
?>
