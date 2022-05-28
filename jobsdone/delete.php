<?php
   include "connect.php";
   session_start();
   $dno=(int)$_GET['Getdevid'];
   if(isset($_GET['Getdevid']))
   {
       $query= "DELETE from devicem where DNO=$dno";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:display.php");
       }
       else
       {
           echo $query."delete successful";
           die(oci_parse_error($con));
       }
   }
?>
