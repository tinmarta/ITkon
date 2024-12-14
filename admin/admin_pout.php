<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="pout.css">
     
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
              <li><a href="#">
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
                    <i class="uil uil-wallet"></i>
                    <span class="text">Payout</span>
                </div>
                
                <div class="py-4">
                    <div class="px-14 py-6">
                      <table class="w-full border-collapse border-spacing-0">
                        <tbody>
                          <tr>
                            <td class="w-full align-top">
                              <div>
                                <img src="images/itk.png" class="h-12" />
                              </div>
                            </td>
              
                            <td class="align-top">
                              <div class="text-sm">
                                <table class="border-collapse border-spacing-0">
                                  <tbody>
                                    <tr>
                                      <td class="border-r pr-4">
                                        <div>
                                          <p class="whitespace-nowrap text-slate-400 text-right">Date</p>
                                          <p class="whitespace-nowrap font-bold text-main text-right">May 30, 2024</p>
                                        </div>
                                      </td>
                                      <td class="pl-4">
                                        <div>
                                          <p class="whitespace-nowrap text-slate-400 text-right">Invoice #</p>
                                          <p class="whitespace-nowrap font-bold text-main text-right">BRA-00335</p>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
              
                    <div class="bg-slate-100 px-14 py-6 text-sm">
                      <table class="w-full border-collapse border-spacing-0">
                        <tbody>
                          <tr>
                            <td class="w-1/2 align-top">
                              <div class="text-sm text-neutral-600">
                                <p class="font-bold">Bestlink College of The Philippines</p>
                                <p>Number: 909-790-9877</p>
                                <p>VAT: 01234567</p>
                                <p>1116 Tandang Sora</p>
                                <p>Quezon City, 6</p>
                                <p>Philippines</p>
                              </div>
                            </td>
                            
                          </tr>
                        </tbody>
                      </table>
                    </div>
              
                    <div class="px-14 py-10 text-sm text-neutral-700">
                      <table class="w-full border-collapse border-spacing-0">
                        <thead>
                          <tr>
                            <td class="border-b-2 border-main pb-3 pl-3 font-bold text-main">#</td>
                            <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Salary details</td>
                            <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Amount</td>
                           
                            
                            <td class="border-b-2 border-main pb-3 pl-2 pr-3 text-right font-bold text-main">Subtotal</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="border-b py-3 pl-3">1.</td>
                            <td class="border-b py-3 pl-2">Month of December Salary</td>
                            <td class="border-b py-3 pl-2 text-right">₱36,500.00</td>
                            
                            <td class="border-b py-3 pl-2 pr-3 text-right">₱36,500.00</td>
                          </tr>
                          <tr>
                            <td class="border-b py-3 pl-3">2.</td>
                            <td class="border-b py-3 pl-2">Overtime Pay</td>
                            <td class="border-b py-3 pl-2 text-right">₱3,120.00</td>
                            
                           
                            <td class="border-b py-3 pl-2 pr-3 text-right">₱3,120.00</td>
                          </tr>
                          <tr>
                            <td class="border-b py-3 pl-3">3.</td>
                            <td class="border-b py-3 pl-2">Incentives</td>
                            <td class="border-b py-3 pl-2 text-right">₱5,562.00</td>
                            
                           
                            <td class="border-b py-3 pl-2 pr-3 text-right">₱5,562.00</td>
                          </tr>
                          <tr>
                            <td colspan="7">
                              <table class="w-full border-collapse border-spacing-0">
                                <tbody>
                                  <tr>
                                    <td class="w-full"></td>
                                    <td>
                                      <table class="w-full border-collapse border-spacing-0">
                                        <tbody>
                                          <tr>
                                            <td class="border-b p-3">
                                              <div class="whitespace-nowrap text-slate-400">Net total:</div>
                                            </td>
                                            <td class="border-b p-3 text-right">
                                              <div class="whitespace-nowrap font-bold text-main">₱45,182.00</div>
                                            </td>
                                          </tr>
                                          
                                          <tr>
                                            <td class="bg-main p-3">
                                              <div class="whitespace-nowrap font-bold text-white">Total:</div>
                                            </td>
                                            <td class="bg-main p-3 text-right">
                                              <div class="whitespace-nowrap font-bold text-white">₱45,182.00</div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
              
                    <div class="px-14 text-sm text-neutral-700">
                      <p class="text-main font-bold">Salary DETAILS</p>
                      <p>Banco De Oro</p>
                      <p>Bank/Sort Code: 01123123</p>
                      <p>Account Number: 12331234</p>
                      <p>Payment Reference: BRA-00335</p>
                    </div>
              
                    <div class="px-14 py-10 text-sm text-neutral-700">
                      <p class="text-main font-bold">Notes</p>
                      <p class="italic">Bestlink College of The Philippines is commited to make a safe and enjoyable place to work, what is due to you will
                        always be given to you. Have a nice day!
                      </p>
                      </dvi>
              

            
                
                    
                
            
        </div>
    </section>

    <script src="pout.js"></script>
</body>
</html>