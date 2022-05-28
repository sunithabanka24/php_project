<?php
       include "connect.php";
       $compid=$_GET['Getcompid'];
       $query="select  * from comp where compid ='".$compid."'";
       $stmt = oci_parse ($con, $query);
       oci_execute($stmt, OCI_DEFAULT);
     if (($row = oci_fetch_array($stmt, OCI_BOTH)) != false)
     {   
        $compid=$row['COMPID'];
        $locationid=$row['LOCATIONID'];
        $userid=$row['USERID'];
        $compdes=$row['COMPDES'];
        $port=$row['PORT'];
        $ataken=$row['ATAKEN'];
        $closet=$row['CLOSET'];
        $compstatus=$row['COMPSTATUS'];
        $remarks=$row['REMARKS'];
     }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title> complaints </title>
    <style>
        a:hover {text-decoration:none;}
        .form-control
        {
            width:450px;
        }
        body{background:linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));}
    </style>
</head>

<body>
    <div class="container my-5">
    <h2 ><p style="color:white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>
        <form  method="POST" action="updatecc.php" >
            
            <div class="form-group">
                <label><h5>ComplaintId</h5></label>
                <input type="number" class="form-control" placeholder="Enter Your ComplaintId" name="compid" value="<?php echo $compid ?>" required>
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
                <label><h5>ComplaintDescription</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your ComplaintDescription" name="compdes" value="<?php echo $compdes ?>" required>
            </div>
            <div class="form-group">
                <label><h5>ReportTime</h5></label>
                <input type="time" class="form-control" placeholder="Enter Your ReportTime" name="port" value="<?php echo $port ?>" required>
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
                <label><h5>Complaint_Status</h5></label>
                <input type="text" class="form-control" placeholder="Enter Your ComplaintStatus" name="compstatus" value="<?php echo $compstatus ?>" required>
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

    


                 