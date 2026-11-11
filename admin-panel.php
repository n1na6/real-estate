<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>Dashboard|</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="admin-panel.css">
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
                    <a href="sellingOffers.html"><span class="fas fa-book"></span><span>Ofertat pët Shitje</span></a>
                </li>
                <li>
                    <a href="homepage.php"><span class="fas fa-sign-out"></span><span>Logout</span></a>
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
 
         <div class="social-icons">
             <span class="fas fa-bell"></span>
             <span class="fas fa-coment"></span>
             <div></div>
 
         </div>
 
     </header>
              
        <main>
                <div class="property-card">
                    <h3>Recent Properties</h3>

                    <div class="table-responsive">
                        <table>
                            <thead>
                              <tr>
                                <th>Id e Prones</th>
                                <th>Tipi i Prones</th>
                                <th>Madhesia m^2</th>
                                <th>Adresa</th>
                                <th>Statusi</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              include 'dashboard.php'; 
                            ?>
                            </tbody>
                        </table>

                    </div>   
                </div>

            </div>
            
           </section>

        </main>
        
    </div>
    <script>
        <script>
    document.addEventListener("DOMContentLoaded", function () {
    fetch('dashboard.php')
        .then(response => response.json())
        .then(properties => {
            const tableBody = document.querySelector('tbody');
            tableBody.innerHTML = '';

            properties.forEach(property => {
                const row = `
                    <tr>
                        <td>${property.ID}</td>
                        <td>${property.property_type}</td>
                        <td>${property.square_meters}</td>
                        <td>${property.address}</td>
                        <td>${property.price}</td>
                        <td>${property.status}</td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', row);
            });
        })
        .catch(error => console.error('Error fetching properties:', error));
});
</script>

    </script>
</body>
</html>