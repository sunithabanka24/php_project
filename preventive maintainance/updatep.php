<?php
       include "connect.php";
       $pmid=$_GET['Getpmid'];
       $query="select  * from pmain where pmid ='".$pmid."'";
       $stmt = oci_parse ($con, $query);
       oci_execute($stmt, OCI_DEFAULT);
     if (($row = oci_fetch_array($stmt, OCI_BOTH)) != false)
     {   
         $pmid = $row['PMID'];
         $locationid = $row['LOCATIONID'];
         $dno = $row['DNO'];
         $pmjob = $row['PMJOB'];
         $abobs = $row['ABOBS'];
         $remarks = $row['REMARKS'];
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
        <form  method="POST" action="updatepp.php" >
            
           <div class="form-group">
               <label><h5>PmId</h5></label>
               <input type="number" class="form-control"  placeholder="Enter your PmId" name="pmid"  value="<?php echo $pmid ?>" required>
           </div>
           <div class="form-group">
               <label><h5>LocationId</h5></label>
               <input type="number" class="form-control"  placeholder="Enter your LocationId" name="locationid"  value="<?php echo $locationid ?>" required>
           </div>
           <div class="form-group">
               <label><h5>Dno</h5></label>
               <input type="number" class="form-control"  placeholder="Enter your Dno" name="dno"  value="<?php echo $dno ?>" required>
           </div>
           <div class="form-group">
               <label><h5>Pm Job Description</h5></label>
               <input type="text" class="form-control"  placeholder="Enter your Job Description" name="pmjob"  value="<?php echo $pmjob ?>" required>
           </div>
           <div class="form-group">
               <label><h5>Abnormalities Observed<h5></label>
               <input type="text" class="form-control"  placeholder="Enter your AbObs" name="abobs"  value="<?php echo $abobs ?>" required>
           </div>
           <div class="form-group">
               <label><h5>Remarks</h5></label>
               <input type="text" class="form-control"  placeholder="Enter your Remarks" name="remarks"  value="<?php echo $remarks ?>" required>
           </div>

           <button type="submit" name="update" class="btn btn-primary" >Update</button>

        </form>
    </div>
            
</body>
</html>

    


                 