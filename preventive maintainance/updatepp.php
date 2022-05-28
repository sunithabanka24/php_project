<?php
include "connect.php";
     if(isset($_POST['update']))
    {

        $pmid=(int)$_POST['pmid'];
        $locationid=(int)$_POST['locationid'];
        $dno=(int)$_POST['dno'];
        $pmjob=$_POST['pmjob'];
        $abobs=$_POST['abobs'];
        $remarks=$_POST['remarks'];
       
       $query = " update pmain set PMID=$pmid , LOCATIONID=$locationid , DNO=$dno, PMJOB='$pmjob',ABOBS='$abobs', REMARKS='$remarks' where PMID=$pmid " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: pdisplay.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>