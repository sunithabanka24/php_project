<?php
    include "connect.php";
    
    if(isset($_POST['submit']))
    {
        $dno=(int)$_POST['dno'];
        $devicename=$_POST['devicename'];
        $location=$_POST['location'];
        $query="INSERT INTO devicem (DNO,DEVICENAME,LOCATION) VALUES($dno,'$devicename','$location')";
        $stmt=oci_parse($con,$query);
        oci_execute($stmt);
        if($stmt)
        {
            header("location:display.php");
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
    <title> Device Master</title>
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
                <label><h5>Device_No</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your DeviceNo" name="dno" required>
            </div>
            <div class="form-group">
                <label><h5>DeviceName</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your DeviceName" name="devicename" required>
            </div>
            <div class="form-group">
                <label><h5>Location</h5></label>
                <select type="text" class="form-control" placeholder="select Your Location" name="location" required> <option>Bf1</option><option>Bf2</option><option>Bf3</option></select>
            </div>
            
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    
</body>
</html>