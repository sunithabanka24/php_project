<?php
   include "connect.php";
   session_start();
   $compid=(int)$_GET['Getcompid'];
   if(isset($_GET['Getcompid']))
   {
       $query= "DELETE from comp where COMPID=$compid";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:cdisplay.php");
       }
       else
       {
           echo $query."delete successful";
           die(oci_parse_error($con));
       }
   }
?>
