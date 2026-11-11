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
                    <a href="property-m.php"><span class="fas fa-folder"></span><span>Property Management</span></a>
                </li>
                <li>
                    <a href="feedback.php"><span class="fas fa-clipboard"></span><span>Query</span></a>
                </li>
                <li>
                    <a href="sellingOffers.html"><span class="fas fa-book"></span><span>Selling Offers</span></a>
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
            <h3 class="dash-title">Në Shitje:</h3>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-building"> Apartamente</span>
                        <div>
                            <h3>Gjithsej:</h3>
                            <h1>34</h1>
                        </div>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-store"> Lokale</span>
                        <div>
                            <h3>Gjithsej:</h3>
                            <h1>5</h1>
                        </div>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-tree"> Trualle</span>
                        <div>
                            <h3>Gjithsej:</h3>
                            <h1>10</h1>
                        </div>
                    </div>
                </div>
            </div>   

            <h3 class="dash-title">Për Qira-marrje:</h3>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-building"> Apartamente</span>
                        <div>
                            <h3>Gjithsej:</h3>
                            <h1>70</h1>
                        </div>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-store"> Lokale</span>
                        <div>
                            <h3>Gjithsej:</h3>
                            <h1>34</h1>
                        </div>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="fas fa-tree"> Trualle</span>
                        <div>
                            <h3>Gjithsej:</h3>
                            <h1>7</h1>
                        </div>
                    </div>
                </div>
            </div> 
            
           <section class="recent">
            <div class="activity-grid">
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
                                <th>Cmimi</th>
                                <th>Statusi</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>56</td>
                                    <td>Apertament</td>
                                    <td>105</td>
                                    <td>Ulpian</td>
                                    <td>--</td>
                                    <td>Ne Shitje</td>
                                </tr>
    
                                <tr>
                                    <td>55</td>
                                    <td>Lokal</td>
                                    <td>200</td>
                                    <td>Gjakove</td>
                                    <td>700/muaj</td>
                                    <td>Per Qira</td>
                                </tr>
    
                                <tr>
                                    <td>54</td>
                                    <td>Toke</td>
                                    <td>4 ari</td>
                                    <td>Peje</td>
                                    <td>800/m^2</td>
                                    <td>Ne Shitje</td>
                                </tr>
                                <tr>
                                    <td>53</td>
                                    <td>Villa</td>
                                    <td>350</td>
                                    <td>Ulqin</td>
                                    <td>--</td>
                                    <td>Per qira</td>
                                </tr>
                
                            </tbody>
                        </table>

                    </div>   
                </div>

                <div class="summery">
                    <div class="summery-card">
                        <div class="summery-single">
                            <span class="fas fa-envelope"></span>
                            <div>
                                <h5>3</h5>
                                <small>Messages</small>
                            </div>
                        </div>
                        <div class="summery-single">
                            <span class="fas fa-briefcase"></span>
                            <div>
                                <h5>16</h5>
                                <small>Selling offers</small>
                            </div>
                        </div>
                        <div class="summery-single">
                            <span class="fas fa-user"></span>
                            <div>
                                <h5>5</h5>
                                <small>New Users</small>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            
           </section>

        </main>
        
    </div>
</body>
</html>