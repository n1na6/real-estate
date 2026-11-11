<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Home</title>
    <link rel="stylesheet" href="home-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar">
        <img class="logo" src="img/logo-.png" alt="Gacaferi-RealEstate">
        
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="sell.html">Sell</a></li>
                <li><a href="contact.php">Contact&Feedback</a></li>
            </ul>
            <a class="login" href="index.php"><button>Login</button></a>    
    </nav>
 
    <header class="header">
        <div class="header-overlay">
            <h1>Gjejë Pronën Përfekte </h1>
            <form class="search-form" action="" method="get">
                <input type="text" placeholder="Kërko në bazë të qytetit" name="query" required>
                <select name="property-type">
                    <option value="">Të gjitha llojet e pronave</option>
                    <option value="apartment">Apartament</option>
                    <option value="house">Shtëpi</option>
                    <option value="vila">Villa</option>
                    <option value="land">Truall</option>
                    <option value="penthouse">PentHouse</option>
                </select>
                <select name="service-type" id="service-type">
                    <option value="">Shërbimi</option>
                    <option value="for-sale">Në shitje</option>
                    <option value="for-rent">Me qira</option>
                </select>
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

    <main class="property-listings">
        <h1>Available <em>Properties</em>:</h1>
        <div class="property-grid" id="property-grid">

            <?php

            include 'fetch-hompage-P.php';


            ?>
        </div>


        <button class="load-more" id="load-more">Load More</button>
        
    </main>

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

<script src="javaScript.js"></script>
     
</body>
</html>