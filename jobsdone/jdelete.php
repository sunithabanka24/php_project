<?php
   include "connect.php";
   session_start();
   $jobid=(int)$_GET['Getjobid'];
   if(isset($_GET['Getjobid']))
   {
       $query= "DELETE from jobt where JOBID=$jobid";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:jdisplay.php");
       }
       else
       {
           echo $query."delete successful";
           die(oci_parse_error($con));
       }
   }
?>
