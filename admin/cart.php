<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="plist.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



    <title>User Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/vlt.png" alt="">
            </div>

            <span class="logo_name">User</span>
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
            
           <img src="images/mal.jpg" alt="">
        </div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
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
            color: rgb(139, 139, 139);
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            background-color: white;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .remove-item {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
        .total {
            text-align: right;
            font-weight: bold;
            font-size: 1.2em;
        }
        .back-link {
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
    <h1>Shopping Cart</h1>

    <table id="cart-table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="cart-items">
            <!-- Cart items will be dynamically inserted here -->
        </tbody>
    </table>

    <div class="total" id="cart-total">
        Total: ₱0.00
    </div>

    <a href="admin_plist.php" class="back-link">Continue Shopping</a>

    <script>
        // Load and display cart items
        function loadCartItems() {
            const cartItemsContainer = document.getElementById('cart-items');
            const cartTotalElement = document.getElementById('cart-total');
            
            // Retrieve cart items from localStorage
            let cartItems = JSON.parse(localStorage.getItem('cartItems') || '[]');
            
            // Clear existing items
            cartItemsContainer.innerHTML = '';
            
            // Calculate total
            let total = 0;
            
            // Populate cart items
            cartItems.forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>$${parseFloat(item.price).toFixed(2)}</td>
                    <td><button class="remove-item" data-index="${index}">Remove</button></td>
                `;
                cartItemsContainer.appendChild(row);
                
                // Add to total
                total += parseFloat(item.price);
            });
            
            // Update total
            cartTotalElement.textContent = `Total: $${total.toFixed(2)}`;
            
            // Add remove item functionality
            document.querySelectorAll('.remove-item').forEach(button => {
                button.addEventListener('click', function() {
                    const index = this.dataset.index;
                    cartItems.splice(index, 1);
                    
                    // Update localStorage
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));
                    
                    // Reload cart
                    loadCartItems();
                });
            });
        }

        // Load cart items when page loads
        loadCartItems();
    </script>
</body>
</html>

<script>
    // Cart functionality
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const row = this.closest('tr');
            const itemName = row.dataset.item;
            const itemPrice = row.dataset.price;

            // Get existing cart items from localStorage
            let cartItems = JSON.parse(localStorage.getItem('cartItems') || '[]');
            
            // Add new item to cart
            cartItems.push({ name: itemName, price: itemPrice });
            
            // Save updated cart to localStorage
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            // Optionally, show a confirmation
            alert(`Added ${itemName} to cart!\nPrice: $${itemPrice}`);
        });
    });
</script>
</body>
</html>




<script src="plist.js"></script>
</body>
</html>