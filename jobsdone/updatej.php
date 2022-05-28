<?php
       include "connect.php";
       $jobid=$_GET['Getjobid'];
       $query="select  * from jobt where jobid ='".$jobid."'";
       $stmt = oci_parse ($con, $query);
       oci_execute($stmt, OCI_DEFAULT);
     if (($row = oci_fetch_array($stmt, OCI_BOTH)) != false)
     {   
        $jobid=$row['JOBID'];
        $locationid=$row['LOCATIONID'];
        $userid=$row['USERID'];
        $jobdes=$row['JOBDES'];
        $opent=$row['OPENT'];
        $ataken=$row['ATAKEN'];
        $closet=$row['CLOSET'];
        $jobstatus=$row['JOBSTATUS'];
        $remarks=$row['REMARKS'];
     }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title> Job's Done</title>
    <style>
        a:hover {text-decoration:none;}
        body{background-image: linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));}
        .form-control
        {
            width: 450px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
    <h2 ><p style="color:white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>
        <form  method="POST" action="updatejj.php" >
            
            <div class="form-group">
                <label><h5>JobId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your JobId" name="jobid" value="<?php echo $jobid ?>" required>
            </div>
            <div class="form-group">
                <label><h5>LocationId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your LocationId" name="locationid" value="<?php echo $locationid ?>" required>
            </div>
            <div class="form-group">
                <label><h5>UserId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your UserId" name="userid" value="<?php echo $userid ?>" required>
            </div>
            <div class="form-group">
                <label><h5>JobDescription</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your JobDescription" name="jobdes" value="<?php echo $jobdes ?>" ?>" required>
            </div>
            <div class="form-group">
                <label><h5>StartTime</h5></label>
                <input type="time" class="form-control" placeholder="Enter Your StartTime" name="opent" value="<?php echo $opent ?>" required>
            </div>
            <div class="form-group">
                <label><h5>ActionTaken</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your ActionTaken" name="ataken" value="<?php echo $ataken ?>" required>
            </div>
            <div class="form-group">
                <label><h5>CloseTime</h5></label>
                <input type="time" class="form-control" placeholder="Enter Your closetime" name="closet" value="<?php echo $closet ?>" required>
            </div>
            <div class="form-group">
                <label><h5>Job_Status</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your JobStatus" name="jobstatus" value="<?php echo $jobstatus ?>" required>
            </div>
            <div class="form-group">
                <label><h5>Remarks</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your Remarks" name="remarks" value="<?php echo $remarks ?>" required>
            </div>

           <button type="submit" name="update" class="btn btn-primary" >Update</button>

        </form>
    </div>
            
</body>
</html>

    


                 