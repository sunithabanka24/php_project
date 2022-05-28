<?php
include "connect.php";
     if(isset($_POST['update']))
    {

       $locationid=(int)$_POST['locationid'];
       $location=$_POST['location'];
       
       $query = " update locationm set LOCATIONID=$locationid, LOCATION='$location'  where LOCATIONID=$locationid " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: ldisplay.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>