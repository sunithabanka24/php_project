<!DOCTYPE html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width ,initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
      <title>UserDisplay</title>
      <style>
        a:hover {text-decoration:none;}
        body{background-image: linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));}
        .container {padding-left:0px;}
        
      </style>
</head>
<body>
        <div class="container">
            <button class="btn btn-info my-5"> <a href="cinsert.php" class="text-dark"> <h4>insert</h4> </a></button>
             <h2 ><p style="color:white;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><h4>CompntId</h4></th>
                        <th scope="col"><h4>LocId</h4></th>
                        <th scope="col"><h4>UserId</h4></th>
                        <th scope="col"><h4>CompDes</h4></th>
                        <th scope="col"><h4>portTime</h4></th>
                        <th scope="col"><h4>ActionTaken</h4></th>
                        <th scope="col"><h4>CloseTime</h4></th>
                        <th scope="col"><h4>CompStatus</h4></th>
                        <th scope="col"><h4>Remarks</h4></th>
                        <th scope="col"><h4>Update</h4></th>
                        <th scope="col"><h4>Delete</h4></th>
                        
                    </tr>
                </thead>

                <?php
                     include "connect.php";
                     $query="SELECT *from comp order by compid";
                     $stmt=oci_parse($con,$query);
                     oci_execute($stmt,OCI_DEFAULT);
                    if($stmt)
                    {
                        while (($row = oci_fetch_array($stmt,OCI_BOTH))!=false)
                        {
                            $compid=$row['COMPID'];
                            $locationid=$row['LOCATIONID'];
                            $userid=$row['USERID'];
                            $compdes=$row['COMPDES'];
                            $port=$row['PORT'];
                            $ataken=$row['ATAKEN'];
                            $closet=$row['CLOSET'];
                            $compstatus=$row['COMPSTATUS'];
                            $remarks=$row['REMARKS'];
                ?>     
                             <tr>
                                 <td><h5><?php echo $compid ?></h5></td>
                                 <td><h5><?php echo $locationid ?></h5></td>
                                 <td><h5><?php echo $userid ?></h5></td>
                                 <td><h5><?php echo $compdes ?></h5></td>
                                 <td><h5><?php echo $port ?></h5></td>
                                 <td><h5><?php echo $ataken ?></h5></td>
                                 <td><h5><?php echo $closet ?><h5></td>
                                 <td><h5><?php echo $compstatus ?></h5></td>
                                 <td><h5><?php echo $remarks ?></h5></td>
                                 
                                 <td><a href="updatec.php?Getcompid=<?php echo $compid ?>"><button class="btn btn-primary">Update</button></a></td>
                                 <td><a href="cdelete.php?Getcompid=<?php echo $compid ?>"><button class="btn btn-danger">Delete</button></a></td>
                             </tr>
                <?php
                        }
                    }
                ?>

            </table>
       </div>

</body>
</html>
                
                          
                 
                      
                
            
                          
    