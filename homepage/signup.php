<?php
session_start();
?>
<?php
    include "connect.php";
    
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $passw=$_POST['passw'];
        $repassw=$_POST['repassw'];
        if($passw==$repassw)
        {
             $query="INSERT INTO login (NAME,EMAIL,PASSW,REPASSW) VALUES ( '$name' ,'$email','$passw','$repassw')";
             $stmt=oci_parse($con,$query);
             oci_execute($stmt);
             if($stmt)
             {   
                 $_SESSION['status'] = "Account Created !";
               
                 header("location:signin.php");
             }
             else
             {
                 $_SESSION['status'] = "Error !";
                 header("Location: signup.php");
             }
        }
        else
        {
              $_SESSION['status'] = "Error !";
              $msg="password mismatched!!";
              echo $msg;

              header("Location: home.php");
        }
    
    }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width,initial-scale=1.0">

       <title>SignUp form </title>
       <script src="https://kit.fontawesome.com/3221a471b1.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="style1.css">
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="vsp.jpeg" class="image">
                   <form action="signup.php" class="signupf" method="post" name="vform">

                        <h1 class="signin">SignUp</h1>
                        
                        <div class="inputf">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" placeholder="Name"  required>
                            <!-- <span id="nameerror">name is required</span> -->
                            
                        </div>

                        <div class="inputf">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="email" placeholder=" Enter your Email" required>
                            <!-- <span id="emailerror">email is required</span> -->

                        </div>

                        <div class="inputf">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="passw" placeholder=" Password" required>
                            

                        </div>

                        <div class="inputf">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="repassw" placeholder="Re-type Password" required>
                            <!-- <span id="passworderror">password is required</span> -->

                        </div><br>

                        <button type="submit" name="submit" class="btn btn-primary">SignUp</button>
                        
                        <p> <h2><br>already have an account? </h2><a href="signin.php"><h2>SignIn<h2></a></p>
                    </form>
            </div>
        </div>
          <!-- <script src="script.js"></script> -->
    </body>
</html>
<?php
unset($_SESSION["error"]);
?>