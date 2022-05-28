<?php
include "connect.php";
     if(isset($_POST['update']))
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
       
       $query = " update jobt set JOBID=$jobid , LOCATIONID=$locationid , USERID=$userid , JOBDES='$jobdes',OPENT=$opent,ATAKEN='$ataken',CLOSET=$closet,JOBSTATUS='$jobstatus',REMARKS='$remarks' where JOBID=$jobid " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: jdisplay.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>