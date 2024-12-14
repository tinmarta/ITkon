<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="mess.css">
     
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
                
                <li><a href="user_dlist.php">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Subjects</span>
                </a></li>
                <li><a href="user_sched.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Mys Schedule</span>
                </a></li>
                <li><a href="user_price.php">
                    <i class="uil uil-receipt-alt"></i>
                    <span class="link-name">BCP Store</span>
                </a></li>
                <li><a href="#">
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
                    <i class="uil uil-envelope-check"></i>
                    <span class="text">Messages</span>
                </div>

                <div class="accordion">
                    <div class="image-box">
                      <img src="images/itk.png" alt="">
                    </div>
                    <div class="accordion-text">
                      <div class="title">Important Messages</div>
                    <ul class="faq-text">
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr. Constantino - July 29. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Good Day, All Students are requiered to wear their respective uniform. All Students who will not follow will be given santions.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr. Constantino - Aug 29. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Good Day, All Students are requiered to wear their respective uniform. All Students who will not follow will be given santions.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr. Constantino - Sep 29. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Good Day, All Students are requiered to wear their respective uniform. All Students who will not follow will be given santions.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr. Constantino - Oct 29. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Good Day, All Students are requiered to wear their respective uniform. All Students who will not follow will be given santions.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr. Constantino - Nov 29. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Good Day, All Students are requiered to wear their respective uniform. All Students who will not follow will be given santions.
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr. Constantino - Dec 29. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Good Day, All Students are requiered to wear their respective uniform. All Students who will not follow will be given santions.
                        </p>
                        <span class="line"></span>
                      </li>
                    </ul>
                    </div>
                  </div>
   
                        
                    
                
            
        </div>
    </section>

    <script>
        let li = document.querySelectorAll(".faq-text li");
        for (var i = 0; i < li.length; i++) {
          li[i].addEventListener("click", (e)=>{
            let clickedLi;
            if(e.target.classList.contains("question-arrow")){
              clickedLi = e.target.parentElement;
            }else{
              clickedLi = e.target.parentElement.parentElement;
            }
           clickedLi.classList.toggle("showAnswer");
          });
        }
      </script>
    
    <script src="mess.js"></script>
</body>
</html>