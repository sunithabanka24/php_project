<?php
    include "connect.php";
    
    if(isset($_POST['submit']))
    {
        $userid=(int)$_POST['userid'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $query="INSERT INTO userm (USERID,USERNAME,EMAIL) VALUES($userid,'$username','$email')";
        $stmt=oci_parse($con,$query);
        oci_execute($stmt);
        if($stmt)
        {
            header("location:udisplay.php");
        }
        else
        {
            echo "failed";
        }
    }

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title> User Master</title>
    <style> 
        a:hover{ text-decoration:none} 
        .form-control
        {
            width:450px;
        }
        body{background-image: linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));}
    </style>


</head>
<body>
    <div class="container my-5">
    <h2 ><p style="color:white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>

        <form method="POST">
            <div class="form-group">
                <label><h5>User_Id</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your UserId" name="userid" required>
            </div>
            <div class="form-group">
                <label><h5>UserName</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your UserName" name="username" required>
            </div>
            <div class="form-group">
                <label><h5>EmailId</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your EmailId" name="email" required>
            </div>
            
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    
</body>
</html>