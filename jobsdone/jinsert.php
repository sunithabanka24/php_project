<?php
    include "connect.php";
    
    if(isset($_POST['submit']))
    {
        $jobid=(int)$_POST['jobid'];
        $locationid=(int)$_POST['locationid'];
        $userid=(int)$_POST['userid'];
        $jobdes=$_POST['jobdes'];
        $opent=(int)$_POST['opent'];
        $ataken=$_POST['ataken'];
        $closet=(int)$_POST['closet'];
        $jobstatus=$_POST['jobstatus'];
        $remarks=$_POST['remarks'];
        $query="INSERT INTO jobt (JOBID,LOCATIONID,USERID,JOBDES,OPENT,ATAKEN,CLOSET,JOBSTATUS,REMARKS) VALUES($jobid,$locationid,$userid,'$jobdes',$opent,'$ataken',$closet,'$jobstatus','$remarks')";
        $stmt=oci_parse($con,$query);
        oci_execute($stmt);
        if($stmt)
        {
            header("location:jdisplay.php");
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
                <label><h5>JobId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your JobId" name="jobid" required>
            </div>
            <div class="form-group">
                <label><h5>LocationId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your LocationId" name="locationid" required>
            </div>
            <div class="form-group">
                <label><h5>UserId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your UserId" name="userid" required>
            </div>
            <div class="form-group">
                <label><h5>JobDescription</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your JobDescription" name="jobdes" required>
            </div>
            <div class="form-group">
                <label><h5>StartTime</h5></label>
                <input type="time" class="form-control" placeholder="Enter Your StartTime" name="opent" required>
            </div>
            <div class="form-group">
                <label><h5>ActionTaken</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your ActionTaken" name="ataken" required>
            </div>
            <div class="form-group">
                <label><h5>CloseTime</h5></label>
                <input type="time" class="form-control" placeholder="Enter Your closetime" name="closet" required>
            </div>
            <div class="form-group">
                <label><h5>Job_Status</h5></label>
                <select type="text" class="form-control" placeholder="Enter Your JobStatus" name="jobstatus" required><option>completed</option><option>Working In Progress</option></select>
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