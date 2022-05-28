<?php
       include "connect.php";
       $dno=$_GET['Getdevid'];
       $query="select  * from devicem where dno ='".$dno."'";
       $stmt = oci_parse ($con, $query);
       oci_execute($stmt, OCI_DEFAULT);
     if (($row = oci_fetch_array($stmt, OCI_BOTH)) != false)
     {   
         $dno = $row['DNO'];
         $devicename = $row['DEVICENAME'];
         $location = $row['LOCATION'];
     }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title> Device master</title>
    <style>
        a:hover {text-decoration:none;}
        body{background-image: linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));}
        .form-control
        {
            width:450px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
    <h2 ><p style="color:white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>
        <form  method="POST" action="updatedd.php" >
            
           <div class="form-group">
               <label><h5>DeviceNo</h5></label>
               <input type="number" class="form-control"  placeholder="Enter your DeviceNo" name="dno"  value="<?php echo $dno ?>" required>
           </div>
           <div class="form-group">
               <label><h5>DeviceName</h5></label>
               <input type="text" class="form-control"  placeholder="Enter your DeviceName" name="devicename"  value="<?php echo $devicename ?>" required>
           </div>
           <div class="form-group">
               <label><h5>Location</h5></label>
               <select type="text" class="form-control"  placeholder="Enter your Location" name="location"  value="<?php echo $location ?>" required><option>bf1</option><option>bf2</option><option>bf3</option></select>
           </div>

           <button type="submit" name="update" class="btn btn-primary" >Update</button>

        </form>
    </div>
            
</body>
</html>

    


                 