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
              <li><a href="admin_dlist.php">
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
            
           <img src="images/Profile.jpg" alt="">
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
                          <span class="question">From Mr.Constantino - July 18. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All instructors shall report to the office every third week of the month regarding will all the lesson plans they adhere to.
                          Strict compliance is a must. 
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr.Constantino - Aug 18. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All instructors shall report to the office every third week of the month regarding will all the lesson plans they adhere to.
                          Strict compliance is a must. 
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr.Constantino - Sep 18. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All instructors shall report to the office every third week of the month regarding will all the lesson plans they adhere to.
                          Strict compliance is a must. 
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr.Constantino - Oct 18. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All instructors shall report to the office every third week of the month regarding will all the lesson plans they adhere to.
                          Strict compliance is a must. 
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr.Constantino - Nov 18. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All instructors shall report to the office every third week of the month regarding will all the lesson plans they adhere to.
                          Strict compliance is a must. 
                        </p>
                        <span class="line"></span>
                      </li>
                      <li>
                        <div class="question-arrow">
                          <span class="question">From Mr.Constantino - Dec 18. 2024</span>
                          <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>All instructors shall report to the office every third week of the month regarding will all the lesson plans they adhere to.
                          Strict compliance is a must. 
                        </p>
                        <span class="line"></span>
                      </li>
                    </ul>
                    </div>
                  </div>
   
                        
                    
                
            
      
       
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <style>
        /* Your existing CSS here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            
            background-color: #f0f2f5;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 20px;
            background-color: #fff;
            padding: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
        }
        .main-content {
            flex: 3;
            margin-right: 20px;
        }
        .status {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        .status input, .status textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .status button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .status button:hover {
            background-color: #0056b3;
        }
        .post {
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 10px;
        }
        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .post-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .post-content {
            margin: 10px 0;
        }
        .post-actions {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }
        .post-actions button {
            background: none;
            border: none;
            color: #007bff;
            cursor: pointer;
        }
        
      
    </style>
   
    <div class="container">
        <div class="main-content">
            <!-- Status Input Section -->
            <div class="status">
                <input id="name" type="text" placeholder="Your Name"/>
                <input id="department" type="text" placeholder="Your Department"/>
                <textarea id="postContent" placeholder="What's on your mind?" rows="3"></textarea>
                <button onclick="addPost()">Post</button>
            </div>

            <!-- Posts Section -->
            <div id="postsContainer">
                <!-- Posts will be dynamically loaded here -->
            </div>
        </div>
    </div>

    <script>
        // Fetch and display posts
        async function fetchPosts() {
            const response = await fetch('fetch_posts.php');
            const posts = await response.text();
            document.getElementById('postsContainer').innerHTML = posts;
        }

        // Add a new post
        async function addPost() {
            const name = document.getElementById('name').value;
            const department = document.getElementById('department').value;
            const content = document.getElementById('postContent').value;

            if (!name || !department || !content) {
                alert('Please fill in all fields.');
                return;
            }

            const formData = new FormData();
            formData.append('name', name);
            formData.append('department', department);
            formData.append('content', content);

            const response = await fetch('add_post.php', {
                method: 'POST',
                body: formData
            });

            if (response.ok) {
                document.getElementById('name').value = '';
                document.getElementById('department').value = '';
                document.getElementById('postContent').value = '';
                fetchPosts(); // Reload posts
            } else {
                alert('Failed to add post.');
            }
        }

        // Load posts when the page loads
        fetchPosts();
    </script>

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
    
    <script src="mess.css"></script>
</body>
</html>