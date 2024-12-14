<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
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
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                
                <li><a href="user_dlist.php">
                    <i class="uil uil-user-nurse"></i>
                    <span class="link-name">Groups</span>
                </a></li>
                <li><a href="user_sched.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Schedule</span>
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
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-schedule"></i>
                        <span class="text">Class Adviser</span>
                        <span class="number">Wally Bayola</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-receipt-alt"></i>
                        <span class="text">Course and Section</span>
                        <span class="number">BSIT - 31022</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-bill"></i>
                        <span class="text">Balance</span>
                        <span class="number">₱ 0.00</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Activity</span>
                        <span class="data-list">Name Update</span>
                        <span class="data-list">Change Visit Schedule</span>
                       
                        
                    </div>
                    <div class="data email">
                        <span class="data-title">Process</span>
                        <span class="data-list">Mary Loi Yves Ricalde</span>
                        <span class="data-list">May 31, 2024</span>
                       
                        
                    </div>
                    <div class="data joined">
                        <span class="data-title">Date</span>
                        <span class="data-list">2024-29-05</span>
                        <span class="data-list">2024-29-05</span>
                        
                        
                    </div>
                    <div class="data type">
                        <span class="data-title">Time</span>
                        <span class="data-list">15:36 PM</span>
                        <span class="data-list">9:09 AM</span>
                        
                        
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Successful</span>
                        <span class="data-list">Successful</span>
                        
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Newsfeed</span>
                </div>
</div>


            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    

    <!-- START blog -->
			
				<div class="container">
				<div class="section_heading text-center">
                    <h2>Latest <span>News</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <br/> ultrices sapien vel quam luctus pulvinar.</p>
                </div>
					<div class="row">
						<div class="col-md-12">
							<div class="blog_slider_area owl-carousel">
								<div class="box-area">	
									<div class="single-blog">
                                        <div class="post-img">
                                            <img src="enroll.jpg" alt=""/>
                                        </div>
                                        <div class="single_blog">
                                            <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                            <ul class="icon-area">
                                                <li><i class="fa fa-users"></i>Admin</li>
                                                <li><i class="fa fa-clock-o"></i>February 21,2022 </li>										
                                            </ul>
                                            <p class="blog-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                            </p>
                                            <div class="btn-area">
                                                <a href="#" class="btn btn-default main_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
								</div> 
                                
							
								<div class="box-area">	
									<div class="single-blog wow fadeInUp">
                                        <div class="post-img">
                                            <img src="enroll.jpg" alt=""/>
                                        </div>
                                        <div class="single_blog">
                                            <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                            <ul class="icon-area">
                                                <li><i class="fa fa-users"></i>Admin</li>
                                                <li><i class="fa fa-clock-o"></i>February 21,2022 </li>										
                                            </ul>
                                            <p class="blog-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                            </p>
                                            <div class="btn-area">
                                                <a href="https://bcp.edu.ph/news/Bulacan-BSCPE-Students-Win-at-Research-Festival-with-Innovative-Vital-Signs-Monitoring-System" class="btn btn-default main_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
								</div> <!-- END SINGLE blogS -->	
							
								<div class="box-area">	
									<div class="single-blog wow fadeInUp">
                                        <div class="post-img">
                                            <img src="img/3.jpg" alt=""/>
                                        </div>
                                        <div class="single_blog">
                                            <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                            <ul class="icon-area">
                                                <li><i class="fa fa-users"></i>Admin</li>
                                                <li><i class="fa fa-clock-o"></i>February 21,2022 </li>										
                                            </ul>
                                            <p class="blog-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                            </p>
                                            <div class="btn-area">
                                                <a href="#" class="btn btn-default main_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
								</div> <!-- END SINGLE blogS -->
							
								<div class="box-area">	
									<div class="single-blog wow fadeInUp">
                                        <div class="post-img">
                                            <img src="img/4.jpg" alt=""/>
                                        </div>
                                        <div class="single_blog">
                                            <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                            <ul class="icon-area">
                                                <li><i class="fa fa-users"></i>Admin</li>
                                                <li><i class="fa fa-clock-o"></i>February 21,2022 </li>										
                                            </ul>
                                            <p class="blog-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                            </p>
                                            <div class="btn-area">
                                                <a href="#" class="btn btn-default main_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
								</div> <!-- END SINGLE blogS -->
							
								<div class="box-area">	
									<div class="single-blog wow fadeInUp">
                                        <div class="post-img">
                                            <img src="img/5.jpg" alt=""/>
                                        </div>
                                        <div class="single_blog">
                                            <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                            <ul class="icon-area">
                                                <li><i class="fa fa-users"></i>Admin</li>
                                                <li><i class="fa fa-clock-o"></i>February 21,2022 </li>										
                                            </ul>
                                            <p class="blog-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                            </p>
                                            <div class="btn-area">
                                                <a href="#" class="btn btn-default main_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
								</div> <!-- END SINGLE blogS -->
							
								<div class="box-area">	
									<div class="single-blog wow fadeInUp">
                                        <div class="post-img">
                                            <img src="img/6.jpg" alt=""/>
                                        </div>
                                        <div class="single_blog">
                                            <a href="#"><h3 class="post-title">Web Design Agency</h3></a>
                                            <ul class="icon-area">
                                                <li><i class="fa fa-users"></i>Admin</li>
                                                <li><i class="fa fa-clock-o"></i>February 21,2022 </li>										
                                            </ul>
                                            <p class="blog-text">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                            </p>
                                            <div class="btn-area">
                                                <a href="#" class="btn btn-default main_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
								</div> <!-- END SINGLE blogS -->	
							</div>
						</div>
					</div>
				</div>
			
		<!-- END blog -->

            

            
        </div>
    </section>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
		<script>
        $(".blog_slider_area").owlCarousel({
				autoplay: true,
				slideSpeed:1000,
				items : 3,
				loop: true,
				nav:false,
				margin: 30,
				dots: true,
				responsive:{
					320:{
						items:1
					},
					767:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:3
					}
				}
				
			});
    </script>

    <script src="script.js"></script>
</body>
</html>