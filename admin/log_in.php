<?php
    $Email = $password = "";
    $EmailErr = $passwordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")  {
        if(empty($_POST["Email"])) {
            $EmailErr = "Email is Required!";
        }
        else {
            $Email = $_POST["Email"];
        }
        if(empty($_POST["Password"])) {
            $passwordErr = "Password is Required!";
        }
        else {
            $password = $_POST["Password"];
        }
        if ($Email && $password){
            include("connections.php");
            
            $check_email=mysqli_query($connections, "SELECT * FROM login_tbl WHERE email='$Email'");
            $check_email_row = mysqli_num_rows($check_email);
            if($check_email_row > 0){
                while($row=mysqli_fetch_assoc($check_email)){
                    $db_password= $row["password"];
                
                if($password == $db_password){
                    $db_Account_type= $row["Account_type"];
                    if($db_Account_type == "1"){
                        echo " <script> window.location.href='admin/admin.php' </script> ";

                }else{
                    echo" <script> window.location.href='user' </script> ";
                }
      }else{
        $passwordErr = "Password is incorrect";
    }
           
            }

            } else {
                $EmailErr = "Email is not registered!";
            }
        }
    }

?>

<html>
    <head>
        <title>Sign In to VITA</title>
    </head>
    <link rel="stylesheet" href="log_in.css">
    

    <header>
        <div class="logo">
            <img src="images/itk.png" alt="">
        </div>
    </header>

    <body>
        <div class="container">
        <h1>Sign in to VITA</h1>
        <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" id="Email" class="form-control" placeholder="Email" name="Email" value="<?php echo $Email; ?>" >
                <span class ="error"> <?php echo $EmailErr; ?> </span>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" value="<?php echo $password; ?>">
                <span class="error"><?php echo $passwordErr;?></span>
            </div>
            <input type="submit" class="btn" value="Sign in">
        </form>
        </div>
    </body>

    <footer>
        <div class="bottom">
            <h1>Performance Management System</h1>
        </div>
    </footer>
</html> 