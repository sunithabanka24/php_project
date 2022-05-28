<?php
   include "connect.php";
   session_start();
   $userid=(int)$_GET['Getuserid'];
   if(isset($_GET['Getuserid']))
   {
       $query= "DELETE from userm where USERID=$userid";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:udisplay.php");
       }
       else
       {
           echo $query."delete successful";
           die(oci_parse_error($con));
       }
   }
?>
