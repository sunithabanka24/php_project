<?php
    include "connect.php";
    
    if(isset($_POST['submit']))
    {
        $pmid=(int)$_POST['pmid'];
        $locationid=(int)$_POST['locationid'];
        $dno=(int)$_POST['dno'];
        $pmjob=$_POST['pmjob'];
        $abobs=$_POST['abobs'];
        $remarks=$_POST['remarks'];
        $query="INSERT INTO pmain (PMID,LOCATIONID,DNO,PMJOB,ABOBS,REMARKS) VALUES($pmid,$locationid,$dno,'$pmjob','$abobs','$remarks')";
        $stmt=oci_parse($con,$query);
        oci_execute($stmt);
        if($stmt)
        {
            header("location:pdisplay.php");
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
    <title> Preventive Maintainance</title>
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
                <label><h5>PmId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your PmId" name="pmid" required>
            </div>
            <div class="form-group">
                <label><h5>LocationId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your LocationId" name="locationid" required>
            </div>
            <div class="form-group">
                <label><h5>Dno</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your Dno" name="dno" required>
            </div>
            <div class="form-group">
                <label><h5>Pm Job Description</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your PmJob" name="pmjob" required>
            </div>
            <div class="form-group">
                <label><h5>Abnormalities Observed</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your AbObs" name="abobs" required>
            </div>
            <div class="form-group">
                <label><h5>Remarks</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your Remarks" name="remarks" required>
            </div>
            
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    
</body>
</html>