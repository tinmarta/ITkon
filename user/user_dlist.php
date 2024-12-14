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

    <title>User Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/itk.png" alt="">
            </div>

            <span class="logo_name">User</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="user.html">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                
                <li><a href="#">
                    <i class="uil uil-user-nurse"></i>
                    <span class="link-name">Subjects</span>
                </a></li>
                <li><a href="user_sched.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">My Schedule</span>
                </a></li>
                <li><a href="user_price.php">
                    <i class="uil uil-receipt-alt"></i>
                    <span class="link-name">BCP Store</span>
                </a></li>
                <li><a href="user_mess.php">
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
            
           <img src="images/mal.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-user-nurse"></i>
                    <span class="text">Subject Information</span>
                </div>

            
                <table >

 

                    <tr>
                   
                    <th>#</th>
                   
                    <th>Subject Name</th>
                   
                    <th>Subject Code</th>
                   
                    <th>Instructor</th>
                   
                    <th>Room</th>
                   
                    <th>Status</th>
                   
                    </tr>
                   
                   
                     <tr>
                   
                    <td>1</td>
                   
                    <td>IT ELECTIVE 3</td>
                   
                    <td>ITELEC3</td>
                   
                    <td>Marimel Loya</td>
                   
                    <td>MV 310</td>
                   
                    <td>Enrolled</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>2</td>
                   
                    <td>Project Management</td>
                   
                    <td>OAELEC2</td>
                   
                    <td>Jorge Lucero</td>
                   
                    <td>MV 310</td>
                   
                    <td>Enrolled</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>3</td>
                   
                    <td>Fundamentals of Database System</td>
                   
                    <td>CCS2204</td>
                   
                    <td>Patrick David Lim</td>
                   
                    <td>MV 310</td>
                   
                    <td>Enrolled</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>4</td>
                   
                    <td>Information Assurance and Security 1</td>
                   
                    <td>CCS2202</td>
                   
                    <td>Lyn Supena</td>
                   
                    <td>MV 310</td>
                   
                    <td>Enrolled</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>5</td>
                   
                    <td>Application Development and Emerging Technologies</td>
                   
                    <td>CC106</td>
                   
                    <td>Andrew Delacruz</td>
                   
                    <td>MV 310</td>
                   
                    <td>Enrolled</td>
                   
                    </tr>
                   
                    <tr>
                   
                    <td>6</td>
                   
                    <td>Business Continuity</td>
                   
                    <td>ITSP1C</td>
                   
                    <td>Richelyn Villasor</td>
                   
                    <td>MV 310</td>
                   
                    <td>Enrolled</td>
                   
                    </tr>
                   
                    
                    </table>
            

                

            
                        
                    
                
            
        </div>
    </section>

    <script src="dlist.js"></script>
</body>
</html>