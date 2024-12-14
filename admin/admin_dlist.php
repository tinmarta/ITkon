<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dlist.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/itk.png" alt="">
            </div>

            <span class="logo_name">Admin</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin.html">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-user-nurse"></i>
                    <span class="link-name">My Class</span>
                </a></li>
                <li><a href="admin_plist.php">
                <i class="uil uil-bill"></i>
                    <span class="link-name">BCP Store</span>
                </a></li>
                <li><a href="admin_sched.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Schedule</span>
                </a></li>
                <li><a href="admin_pout.php">
                    <i class="uil uil-wallet"></i>
                    <span class="link-name">Payout</span>
                </a></li>
                <li><a href="admin_mess.php">
                    <i class="uil uil-envelope-check"></i>
                    <span class="link-name">Announcements</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
           <img src="images/Profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-user-nurse"></i>
                    <span class="text">BSIT 33022 - Advisory (CCS2204)</span>
                </div>

            
                <table >

 

                    <tr>
                   
                    <th>#</th>
                   
                    <th>First Name</th>
                   
                    <th>Surname</th>
                   
                    <th>ID Number</th>
                   
                    <th>Birthday</th>
                   
                    <th>Balance</th>
                   
                    </tr>
                   
                   
                     <tr>
                   
                    <td>1</td>
                   
                    <td>Rey</td>
                   
                    <td>Valerio</td>
                   
                    <td>22018789</td>
                   
                    <td>18 Nov 2002</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>2</td>
                   
                    <td>Reynold</td>
                   
                    <td>Limban</td>
                   
                    <td>220198765</td>
                   
                    <td>16 Dec 2000</td>
                   
                    <td>1,506 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>3</td>
                   
                    <td>Martin</td>
                   
                    <td>Justine</td>
                   
                    <td>22019825</td>
                   
                    <td>12 Nov 2000</td>
                   
                    <td>5,050 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>4</td>
                   
                    <td>Lito</td>
                   
                    <td>Mari</td>
                   
                    <td>28028977</td>
                   
                    <td>18 Mar 2001</td>
                   
                    <td>1,550 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>5</td>
                   
                    <td>Susan</td>
                   
                    <td>Nitong</td>
                   
                    <td>22018798</td>
                   
                    <td>10 Mar 2000</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>6</td>
                   
                    <td>Mary</td>
                   
                    <td>Lara</td>
                   
                    <td>22098719</td>
                   
                    <td>11 Dec 2000</td>
                   
                    <td>5,780 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>7</td>
                   
                    <td>Louis</td>
                   
                    <td>De Guzman</td>
                   
                    <td>22019876</td>
                   
                    <td>12 Jun 2003</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>8</td>
                   
                    <td>Mirko</td>
                   
                    <td>Renmo</td>
                   
                    <td>22098711</td>
                   
                    <td>16 Jan 2003</td>
                   
                    <td>2,000 php</td>
                   
                    </tr>

                    <tr>
                   
                    <td>9</td>
                   
                    <td>Lei</td>
                   
                    <td>Lenier</td>
                   
                    <td>22019876</td>
                   
                    <td>16 Jan 2002</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>

                    <tr>
                   
                   <td>10</td>
                  
                   <td>Nou</td>
                  
                   <td>Ricosin</td>
                  
                   <td>22018789</td>
                  
                   <td>18 Nov 2002</td>
                  
                   <td>1,670 php</td>
                  
                   </tr>
                   
                    </table>
            

                    <div class="title">
                    <i class="uil uil-user-nurse"></i>
                    <span class="text">BSIT 33023 - Subject (CCS2204)</span>
                </div>

            
                        <table >

 

                    <tr>
                   
                    <th>#</th>
                   
                    <th>First Name</th>
                   
                    <th>Surname</th>
                   
                    <th>ID Number</th>
                   
                    <th>Birthday</th>
                   
                    <th>Balance</th>
                   
                    </tr>
                   
                   
                     <tr>
                   
                    <td>1</td>
                   
                    <td>Rey</td>
                   
                    <td>Valerio</td>
                   
                    <td>22018789</td>
                   
                    <td>18 Nov 2002</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>2</td>
                   
                    <td>Reynold</td>
                   
                    <td>Limban</td>
                   
                    <td>220198765</td>
                   
                    <td>16 Dec 2000</td>
                   
                    <td>1,506 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>3</td>
                   
                    <td>Martin</td>
                   
                    <td>Justine</td>
                   
                    <td>22019825</td>
                   
                    <td>12 Nov 2000</td>
                   
                    <td>5,050 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>4</td>
                   
                    <td>Lito</td>
                   
                    <td>Mari</td>
                   
                    <td>28028977</td>
                   
                    <td>18 Mar 2001</td>
                   
                    <td>1,550 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>5</td>
                   
                    <td>Susan</td>
                   
                    <td>Nitong</td>
                   
                    <td>22018798</td>
                   
                    <td>10 Mar 2000</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>6</td>
                   
                    <td>Mary</td>
                   
                    <td>Lara</td>
                   
                    <td>22098719</td>
                   
                    <td>11 Dec 2000</td>
                   
                    <td>5,780 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>7</td>
                   
                    <td>Louis</td>
                   
                    <td>De Guzman</td>
                   
                    <td>22019876</td>
                   
                    <td>12 Jun 2003</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>8</td>
                   
                    <td>Mirko</td>
                   
                    <td>Renmo</td>
                   
                    <td>22098711</td>
                   
                    <td>16 Jan 2003</td>
                   
                    <td>2,000 php</td>
                   
                    </tr>

                    <tr>
                   
                    <td>9</td>
                   
                    <td>Lei</td>
                   
                    <td>Lenier</td>
                   
                    <td>22019876</td>
                   
                    <td>16 Jan 2002</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>

                    <tr>
                   
                   <td>10</td>
                  
                   <td>Nou</td>
                  
                   <td>Ricosin</td>
                  
                   <td>22018789</td>
                  
                   <td>18 Nov 2002</td>
                  
                   <td>1,670 php</td>
                  
                   </tr>
                   
                    </table>  
                    
                    <div class="title">
                    <i class="uil uil-user-nurse"></i>
                    <span class="text">BSIT 33025 - Subject (CCS2204)</span>
                </div>

            
                        <table >

 

                    <tr>
                   
                    <th>#</th>
                   
                    <th>First Name</th>
                   
                    <th>Surname</th>
                   
                    <th>ID Number</th>
                   
                    <th>Birthday</th>
                   
                    <th>Balance</th>
                   
                    </tr>
                   
                   
                     <tr>
                   
                    <td>1</td>
                   
                    <td>Rey</td>
                   
                    <td>Valerio</td>
                   
                    <td>22018789</td>
                   
                    <td>18 Nov 2002</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>2</td>
                   
                    <td>Reynold</td>
                   
                    <td>Limban</td>
                   
                    <td>220198765</td>
                   
                    <td>16 Dec 2000</td>
                   
                    <td>1,506 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>3</td>
                   
                    <td>Martin</td>
                   
                    <td>Justine</td>
                   
                    <td>22019825</td>
                   
                    <td>12 Nov 2000</td>
                   
                    <td>5,050 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>4</td>
                   
                    <td>Lito</td>
                   
                    <td>Mari</td>
                   
                    <td>28028977</td>
                   
                    <td>18 Mar 2001</td>
                   
                    <td>1,550 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>5</td>
                   
                    <td>Susan</td>
                   
                    <td>Nitong</td>
                   
                    <td>22018798</td>
                   
                    <td>10 Mar 2000</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>6</td>
                   
                    <td>Mary</td>
                   
                    <td>Lara</td>
                   
                    <td>22098719</td>
                   
                    <td>11 Dec 2000</td>
                   
                    <td>5,780 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>7</td>
                   
                    <td>Louis</td>
                   
                    <td>De Guzman</td>
                   
                    <td>22019876</td>
                   
                    <td>12 Jun 2003</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>8</td>
                   
                    <td>Mirko</td>
                   
                    <td>Renmo</td>
                   
                    <td>22098711</td>
                   
                    <td>16 Jan 2003</td>
                   
                    <td>2,000 php</td>
                   
                    </tr>

                    <tr>
                   
                    <td>9</td>
                   
                    <td>Lei</td>
                   
                    <td>Lenier</td>
                   
                    <td>22019876</td>
                   
                    <td>16 Jan 2002</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>

                    <tr>
                   
                   <td>10</td>
                  
                   <td>Nou</td>
                  
                   <td>Ricosin</td>
                  
                   <td>22018789</td>
                  
                   <td>18 Nov 2002</td>
                  
                   <td>1,670 php</td>
                  
                   </tr>
                   
                    </table>  


                    <div class="title">
                    <i class="uil uil-user-nurse"></i>
                    <span class="text">BSIT 33024 - Subject (CCS2204)</span>
                </div>

            
                        <table >

 

                    <tr>
                   
                    <th>#</th>
                   
                    <th>First Name</th>
                   
                    <th>Surname</th>
                   
                    <th>ID Number</th>
                   
                    <th>Birthday</th>
                   
                    <th>Balance</th>
                   
                    </tr>
                   
                   
                     <tr>
                   
                    <td>1</td>
                   
                    <td>Rey</td>
                   
                    <td>Valerio</td>
                   
                    <td>22018789</td>
                   
                    <td>18 Nov 2002</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>2</td>
                   
                    <td>Reynold</td>
                   
                    <td>Limban</td>
                   
                    <td>220198765</td>
                   
                    <td>16 Dec 2000</td>
                   
                    <td>1,506 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>3</td>
                   
                    <td>Martin</td>
                   
                    <td>Justine</td>
                   
                    <td>22019825</td>
                   
                    <td>12 Nov 2000</td>
                   
                    <td>5,050 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>4</td>
                   
                    <td>Lito</td>
                   
                    <td>Mari</td>
                   
                    <td>28028977</td>
                   
                    <td>18 Mar 2001</td>
                   
                    <td>1,550 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>5</td>
                   
                    <td>Susan</td>
                   
                    <td>Nitong</td>
                   
                    <td>22018798</td>
                   
                    <td>10 Mar 2000</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>6</td>
                   
                    <td>Mary</td>
                   
                    <td>Lara</td>
                   
                    <td>22098719</td>
                   
                    <td>11 Dec 2000</td>
                   
                    <td>5,780 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>7</td>
                   
                    <td>Louis</td>
                   
                    <td>De Guzman</td>
                   
                    <td>22019876</td>
                   
                    <td>12 Jun 2003</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>8</td>
                   
                    <td>Mirko</td>
                   
                    <td>Renmo</td>
                   
                    <td>22098711</td>
                   
                    <td>16 Jan 2003</td>
                   
                    <td>2,000 php</td>
                   
                    </tr>

                    <tr>
                   
                    <td>9</td>
                   
                    <td>Lei</td>
                   
                    <td>Lenier</td>
                   
                    <td>22019876</td>
                   
                    <td>16 Jan 2002</td>
                   
                    <td>0.00 php</td>
                   
                    </tr>

                    <tr>
                   
                   <td>10</td>
                  
                   <td>Nou</td>
                  
                   <td>Ricosin</td>
                  
                   <td>22018789</td>
                  
                   <td>18 Nov 2002</td>
                  
                   <td>1,670 php</td>
                  
                   </tr>
                   
                    </table>  
            
        </div>
    </section>

    <script src="dlist.js"></script>
</body>
</html>