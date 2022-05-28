<?php
include "connect.php";
     if(isset($_POST['update']))
    {

        $compid=(int)$_POST['compid'];
        $locationid=(int)$_POST['locationid'];
        $userid=(int)$_POST['userid'];
        $compdes=$_POST['compdes'];
        $port=(int)$_POST['port'];
        $ataken=$_POST['ataken'];
        $closet=(int)$_POST['closet'];
        $compstatus=$_POST['compstatus'];
        $remarks=$_POST['remarks'];
       
       $query = "update comp set COMPID=$compid , LOCATIONID=$locationid , USERID=$userid , COMPDES='$compdes',PORT=$port,ATAKEN='$ataken',CLOSET=$closet,COMPSTATUS='$compstatus',REMARKS='$remarks' where COMPID=$compid " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: cdisplay.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>