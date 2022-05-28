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
            <button class="btn btn-info my-5" > <a href="jinsert.php" class="text-dark"><h4> Insert</h4> </a></button> <h2 ><p style="color:white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><h4>JobId</h4></th>
                        <th scope="col"><h4>LocationId</h4></th>
                        <th scope="col"><h4>UserId</h4></th>
                        <th scope="col"><h4>JobDes</h4></th>
                        <th scope="col"><h4>StartTime</h4></th>
                        <th scope="col"><h4>ActionTaken</h4></th>
                        <th scope="col"><h4>CloseTime</h4></th>
                        <th scope="col"><h4>JOb_Status</h4></th>
                        <th scope="col"><h4>Remarks</h4></th>
                        <th scope="col"><h4>Update</h4></th>
                        <th scope="col"><h4>Delete</h4></th>
                        
                    </tr>
                </thead>

                <?php
                     include "connect.php";
                     $query="SELECT *from jobt order by jobid";
                     $stmt=oci_parse($con,$query);
                     oci_execute($stmt,OCI_DEFAULT);
                    if($stmt)
                    {
                        while (($row = oci_fetch_array($stmt,OCI_BOTH))!=false)
                        {
                            $jobid=$row['JOBID'];
                            $locationid=$row['LOCATIONID'];
                            $userid=$row['USERID'];
                            $jobdes=$row['JOBDES'];
                            $opent=$row['OPENT'];
                            $ataken=$row['ATAKEN'];
                            $closet=$row['CLOSET'];
                            $jobstatus=$row['JOBSTATUS'];
                            $remarks=$row['REMARKS'];
                ?>     
                             <tr>
                                 <td><h5><?php echo $locationid ?></h5></td>
                                 <td><h5><?php echo $jobid ?></h5></td>
                                 <td><h5><?php echo $userid ?></h5></td>
                                 <td><h5><?php echo $jobdes ?></h5></td>
                                 <td><h5><?php echo $opent ?></h5></td>
                                 <td><h5><?php echo $ataken ?></h5></td>
                                 <td><h5><?php echo $closet ?></h5></td>
                                 <td><h5><?php echo $jobstatus ?></h5></td>
                                 <td><h5><?php echo $remarks ?></h5></td>
                                 
                                 <td><a href="updatej.php?Getjobid=<?php echo $jobid ?>"><button class="btn btn-primary">Update</button></a></td>
                                 <td><a href="jdelete.php?Getjobid=<?php echo $jobid ?>"><button class="btn btn-danger">Delete</button></a></td>
                             </tr>
                <?php
                        }
                    }
                ?>

            </table>
       </div>
    ljk


</body>
</html>
                
                          
                 
                      
                
            
                          
    