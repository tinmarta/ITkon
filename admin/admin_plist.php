<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="price.css">
     
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
                <li><a href="#">
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

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BCP ONLINE SHOP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: auto;
            margin: 0 auto;
            padding: 1px;
            line-height: 1.6;
            background-color: white;
            padding-top: 60px;
        }
        h1 {
            color: grey;
            text-align: center;
        }
        h2{
            color: #818181;
        }
        h2.dark{
    color: black;
}
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color:white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            background-color:white;
        }
        th {
            background-color: white;
            font-weight: bold;
        }
        .books, .uniforms {
            margin-bottom: 30px;
        }
        .total {
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }
        .add-to-cart {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .add-to-cart:hover {
            background-color: #45a049;
        }
        .cart-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>BCP ONLINE SHOP</h1>
    
    <div class="books">
        <h2>Available Books</h2>
        <table>
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Quantity</th>
                    <th>Price per Unit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr data-item="Database Book" data-price="250">
                    <td>Database Book</td>
                    <td>50</td>
                    <td>₱250</td>
                    <td><button class="add-to-cart">Add to Cart</button></td>
                </tr>
                <tr data-item="NSTP Book" data-price="200">
                    <td>NSTP Book</td>
                    <td>75</td>
                    <td>₱200</td>
                    <td><button class="add-to-cart">Add to Cart</button></td>
                </tr>
                <tr data-item="English Book" data-price="200">
                    <td>English Book</td>
                    <td>12</td>
                    <td>₱200</td>
                    <td><button class="add-to-cart">Add to Cart</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="uniforms">
        <h2>Available Uniforms</h2>
        <table>
            <thead>
                <tr>
                    <th>Uniform Type</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price per Unit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr data-item="Academic Uniform (F) " data-price="1500">
                    <td>Academic Uniform (female) </td>
                    <td>S/M/L</td>
                    <td>75</td>
                    <td>₱1500</td>
                    <td><button class="add-to-cart">Add to Cart</button></td>
                </tr>
                <tr data-item="Academic Uniform (M) " data-price="1800">
                    <td>Academic Uniform (male)</td>
                    <td>S/M/L</td>
                    <td>50</td>
                    <td>₱1800</td>
                    <td><button class="add-to-cart">Add to Cart</button></td>
                </tr>
                <tr data-item="PE (C)" data-price="1000">
                    <td>PE (college)</td>
                    <td>S/L</td>
                    <td>20</td>
                    <td>₱1000</td>
                    <td><button class="add-to-cart">Add to Cart</button></td>
                </tr>
                <tr data-item="Gala Uniform (F) " data-price="1800">
                    <td>Gala Uniform (F)</td>
                    <td>M/L</td>
                    <td>100</td>
                    <td>₱1800</td>
                    <td><button class="add-to-cart">Add to Cart</button></td>
                </tr>
                <tr data-item="Gala Uniform (M) " data-price="1900">
                    <td>Gala Uniform (M)</td>
                    <td>L/XL</td>
                    <td>120</td>
                    <td>₱1900</td>
                    <td><button class="add-to-cart">Add to Cart</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <a href="cart.php" class="cart-link">View Cart</a>

    <script>
       
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const itemName = row.dataset.item;
                const itemPrice = row.dataset.price;

                
                let cartItems = JSON.parse(localStorage.getItem('cartItems') || '[]');
                
                
                cartItems.push({ name: itemName, price: itemPrice });
                
                
                localStorage.setItem('cartItems', JSON.stringify(cartItems));

                
                alert(`Added ${itemName} to cart!\nPrice: ₱${itemPrice}`);
            });
        });
    </script>

    

  

    <script src="price.js"></script>
</body>
</html>