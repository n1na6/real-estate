<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Property Management</title>
    <link rel="stylesheet" href="test.css">
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
                    <a href="sellingOffers.html"><span class="fas fa-book"></span><span>Ofertat për Shitje</span></a>
                </li>
                <li>
                    <a href="index.php"><span class="fas fa-sign-out"></span><span>Logout</span></a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="main-content">

        
        <header>
            <div class="search-wrapper">
                 <span class="fas fa-search"></span>
                 <input type="search" placeholder="search">
             </div>   
             <div class="add-properties">
                <a href="add-property.php" class="add-icon">
                    <i class="fas fa-plus"></i>
                </a>
                <span class="text">Shto Prona të Reja</span>
            </div>  
        </header>

        <main class="property-listings">
            <h1>Available <em>Properties</em>:</h1>
            <div class="property-grid" id="property-grid">
                 
               <?php

                include "fetch-properties-A.php";

                ?>
            </div>
         
        </main>

    
    </div>    



</body>
</html>