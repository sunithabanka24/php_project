<?php
include "connect.php";
     if(isset($_POST['update']))
    {

       $userid=(int)$_POST['userid'];
       $username=$_POST['username'];
       $email=$_POST['email'];
       
       $query = " update userm set USERID=$userid , USERNAME='$username' , EMAIL='$email' where USERID=$userid " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: udisplay.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>