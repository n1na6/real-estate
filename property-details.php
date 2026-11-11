<?php
include 'connect.php';


$propertyID = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$sql = "SELECT p.ID, pt.property_type, ps.status, p.square_meters, p.price, p.state, p.city, p.address, p.description,
            pi.image_path 
        FROM property p
        JOIN property_type pt ON p.property_typeID = pt.ID
        JOIN status ps ON p.status = ps.id
        LEFT JOIN images pi ON p.ID = pi.property_id
        WHERE p.ID = $propertyID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $property = $result->fetch_assoc();

    $sqlImages = "SELECT image_path FROM images WHERE property_id = $propertyID";
    $imagesResult = $conn->query($sqlImages);
    $images = [];
    while ($image = $imagesResult->fetch_assoc()) {
        $images[] = $image['image_path'];
}

} else {
    echo '<p>Property not found.</p>';
    exit;
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="property-details.css">
    <title>Property Details</title>
</head>
<body>
    <nav class="navbar">
        <img class="logo" src="img/logo-.png" alt="Gacaferi-RealEstate">
        <ul class="nav-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="sell.html">Sell</a></li>
            <li><a href="contact.php">Contact&Feedback</a></li>
        </ul>
       <!-- <a class="login" href="index.html"><button>Login</button></a>-->    
    </nav>

    <div class="main-content">
        <section class="view-property">
            <div class="details">
                <div class="thumb">
                    <div class="big-img">
                        
                        <img src="<?php echo htmlspecialchars($property['image_path']) ?: 'img/default-image.jpg'; ?>" alt="Property Image">
                    </div>

                    <div class="small-img">
                        
                        <?php foreach ($images as $image): ?>
                            <img src="<?php echo htmlspecialchars($image); ?>" alt="Property Image">
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="name"><?php echo htmlspecialchars($property['property_type']); ?></div>
                <p class="location"><i class="fas fa-map-marker-alt"></i><span><?php echo htmlspecialchars($property['city']); ?></span></p>
                <div class="info">
                    <p><i class="fas fa-tag"></i><span><?php echo htmlspecialchars($property['status']); ?></span></p>
                    <p><i class="fas fa-user"></i><span>Gacaferi RealEstate</span></p>
                    <p><i class="fas fa-phone"></i>043 886 665</p>
                    <p><i class="fas fa-building"></i><span><?php echo htmlspecialchars($property['property_type']); ?></span></p>
                    <p><i class="fas fa-calendar"></i><span>10-11-2024</span></p>
                </div>
                <h3 class="title">Pershkrimi:</h3>
                <div class="flex">
                    <div class="box">
                        <p class="description"><?php echo nl2br(htmlspecialchars($property['description'])); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <h3>Gacaferi RealEstate</h3>
            <p>Partneri juaj i besueshëm për të gjitha nevojat në fushën e patundshmërisë në Prishtinë dhe rrethinë!</p>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/watch/100094608992045/" class="fa fa-facebook"></a></li>
                <li><a href="https://www.instagram.com/gacaferi.realestate/p/C-XsaEDCB83/?img_index=1" class="fa fa-instagram"></a></li>
                <li><a href="" class="fa fa-phone"></a></li>
                <li><a href="" class="fa fa-envelope"></a></li>
            </ul>
        </div>
    </footer>

    <script>
        document.querySelectorAll('.view-property .details .thumb .small-img img').forEach(imgs => {
            imgs.onclick = () => {
                let src = imgs.getAttribute('src');
                document.querySelector('.view-property .details .thumb .big-img img').src = src;
            };
        });
    </script>
</body>
</html>
