<?php
       include "connect.php";
       $userid=$_GET['Getuserid'];
       $query="select  * from userm where userid ='".$userid."'";
       $stmt = oci_parse ($con, $query);
       oci_execute($stmt, OCI_DEFAULT);
     if (($row = oci_fetch_array($stmt, OCI_BOTH)) != false)
     {   
         $userid = $row['USERID'];
         $username = $row['USERNAME'];
         $email = $row['EMAIL'];
     }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title> crud operations</title>
    <style>
        a:hover {text-decoration:none;}
        .form-control
        {
            width: 450px;
        }
        body{background-image: linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));}
    </style>
    
</head>

<body>
    <div class="container my-5">
    <h2 ><p style="color:white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>
        <form  method="POST" action="updateuu.php" >
            
           <div class="form-group">
               <label><h5>UserId</h5></label>
               <input type="number" class="form-control"  placeholder="Enter your UserId" name="userid"  value="<?php echo $userid ?>" required>
           </div>
           <div class="form-group">
               <label><h5>UserName</h5></label>
               <input type="text" class="form-control"  placeholder="Enter your UserName" name="username"  value="<?php echo $username ?>" required>
           </div>
           <div class="form-group">
               <label><h5>EmailId</h5></label>
               <input type="text" class="form-control"  placeholder="Enter your Email" name="email"  value="<?php echo $email ?>" required>
           </div>

           <button type="submit" name="update" class="btn btn-primary" >Update</button>

        </form>
    </div>
            
</body>
</html>

    


                 