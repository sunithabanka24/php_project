<?php
   include "connect.php";
   session_start();
   $pmid=(int)$_GET['Getpmid'];
   if(isset($_GET['Getpmid']))
   {
       $query= "DELETE from pmain where PMID=$pmid";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:pdisplay.php");
       }
       else
       {
           echo $query."delete successful";
           die(oci_parse_error($con));
       }
   }
?>
