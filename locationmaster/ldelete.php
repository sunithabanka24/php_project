<?php
   include "connect.php";
   session_start();
   $locationid=(int)$_GET['Getlocationid'];
   if(isset($_GET['Getlocationid']))
   {
       $query= "DELETE from locationm where LOCATIONID=$locationid";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:ldisplay.php");
       }
       else
       {
           echo $query."delete successful";
           die(oci_parse_error($con));
       }
   }
?>
