<?php
    
    require_once ("connect.php");
       
    if(isset($_POST['submit']))
    {
            $email=$_POST['email'];
            $passw=$_POST['passw'];
            $query="select * from login where email='$email' and passw='$passw'";
            $stmt = oci_parse ($con,$query);
            oci_execute($stmt);
            // $row = oci_num_rows($stmt);
              
            if($row=oci_fetch_array($stmt))
            {
               
               header("location:home1.php"); 
            }
            else{
             $_SESSION['status'] ="Username password combination is wrong!";
             header("location:home.php");
            }
          
            
     }
     
    
?>


<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width,initial-scale=1.0">

       <title> SignIn form </title>
       <script src="https://kit.fontawesome.com/3221a471b1.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="style1.css">
       <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lobster&family=Poppins:wght@300&display=swap" rel="stylesheet">
       <?php
            if(isset($_SESSION['status']))
            {
            
            ?>
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
             </div>
            <?php
             unset($_SESSION['status']);
            }
    ?>
    </head>
    <style>h3 a{text-decoration:none;} </style>

    <body>
        <div class="container">
            <div class="formcontainer">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="vsp.jpeg" class="image" >
                    <form action="signin.php" class="signinf" method="post">
                        <h1 class="signin">Signin</h1>
                        <?php if (isset($_GET['error'])) { ?>

                         <p class="error"><?php echo $_GET['error']; ?></p>
                         <?php } ?> 
                        <div class="inputf">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username Or Email" name="email" required>
                            
                        </div>
                        <div class="inputf">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="passw" required>
                            
                        </div><br>
                        <h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forgetpassword?</a></h3><br>
                        
                        <button type="submit" name="submit" class="btn btn-primary"><a href="signin.php">SignIn</button>
                        <p> <h2><br>Don't have an account? </h2><a href="signup.php"><h2>Signup<h2></a></p>
                        <!-- <p class="social"><h3>Or Signin with social platforms</h3></p>
                        <div class="socialm">
                            <a href="#" class="social-icon"> <i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"> <i class="fab fa-google"></i></a>
                            
                        </div> -->

                    </form>
            </div>
        </div>
    </body>
</html>