<?php
       include "connect.php";
       $locationid=$_GET['Getlocationid'];
       $query="select  * from locationm where locationid ='".$locationid."'";
       $stmt = oci_parse ($con, $query);
       oci_execute($stmt, OCI_DEFAULT);
     if (($row = oci_fetch_array($stmt, OCI_BOTH)) != false)
     {   
         $location = $row['LOCATIONID'];
         $location = $row['LOCATION'];
        
     }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title> Location Master</title>
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
        <form  method="POST" action="updatell.php" >
            
           <div class="form-group">
               <label><h5>LocationId</h5></label>
               <input type="number" class="form-control"  placeholder="Enter your LocationId" name="locationid"  value="<?php echo $locationid ?>" required>
           </div>
           <div class="form-group">
               <label><h5>Location</h5></label>
               <select type="text" class="form-control"  placeholder="Enter your Location" name="location"  value="<?php echo $location ?>" required><option> Bf1</option><option> Bf2</option><option> Bf3</option></select>
           </div>
           <button type="submit" name="update" class="btn btn-primary" >Update</button>

        </form>
    </div>
            
</body>
</html>

    


                 