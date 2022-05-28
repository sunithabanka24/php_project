<!DOCTYPE html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width ,initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
      <title>UserDisplay</title>
      <style>
        a:hover {text-decoration:none;}
        body{background-image: linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));} 
   
      </style>
</head>
<body>
        <div class="container">
            <button class="btn btn-warning my-5"> <a href="pinsert.php" class="text-dark"><h4> Insert </h4></a></button> <h2 ><p style="color:white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><h4>PmId</h4></th>
                        <th scope="col"><h4>LocationId</h4></th>
                        <th scope="col"><h4>Dno</h4></th>
                        <th scope="col"><h4>Pm Job Description</h4></th>
                        <th scope="col"><h4>Abnormalities Observed</h4></th>
                        <th scope="col"><h4>Remarks</h4></th>
                        <th scope="col"><h4>Update</h4></th>
                        <th scope="col"><h4>Delete</h4></th>
                    </tr>
                </thead>

                <?php
                     include "connect.php";
                     $query="SELECT *from pmain order by pmid ";
                     $stmt=oci_parse($con,$query);
                     oci_execute($stmt,OCI_DEFAULT);
                    if($stmt)
                    {
                        while (($row = oci_fetch_array($stmt,OCI_BOTH))!=false)
                        {
                             $pmid  =  $row['PMID'];
                             $locationid =  $row['LOCATIONID'];
                             $dno  =  $row['DNO'];
                             $pmjob  =  $row['PMJOB'];
                             $abobs  =  $row['ABOBS'];
                             $remarks  =  $row['REMARKS'];
                ?>     
                             <tr>
                                 <td><h5><?php echo $pmid ?></h5></td>
                                 <td><h5><?php echo $locationid ?></h5></td>
                                 <td><h5><?php echo $dno ?></h5></td>
                                 <td><h5><?php echo $pmjob ?></h5></td>
                                 <td><h5><?php echo $abobs ?></h5></td>
                                 <td><h5><?php echo $remarks ?></h5></td>
                                 
                                 <td><a href="updatep.php?Getpmid=<?php echo $pmid ?>"><button class="btn btn-primary">Update</button></a></td>
                                 <td><a href="pdelete.php?Getpmid=<?php echo $pmid ?>"><button class="btn btn-danger">Delete</button></a></td>
                             </tr>
                <?php
                        }
                    }
                ?>

            </table>
       </div>

</body>
</html>
                
                          
                 
                      
                
            
                          
    