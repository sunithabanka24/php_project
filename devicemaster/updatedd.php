<?php
include "connect.php";
     if(isset($_POST['update']))
    {

       $dno=(int)$_POST['dno'];
       $devicename=$_POST['devicename'];
       $location=$_POST['location'];
       
       $query = " update devicem set DNO=$dno , DEVICENAME='$devicename' , LOCATION='$location' where DNO=$dno " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: display.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>