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
        
            <button class="btn btn-info my-5"> <a href="uinsert.php" class="text-dark"> <h4> Insert</h4> </a></button><h2 ><p style="color:white;" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BF CONTROL PROCESS LOG SHEET</p> </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><h4>UserId</h4></th>
                        <th scope="col"><h4>Username</h4></th>
                        <th scope="col"><h4>EmailId</h4></th>
                        <th scope="col"><h4>Update</h4></th>
                        <th scope="col"><h4>Delete</h4></th>
                    </tr>
                </thead>

                <?php
                     include "connect.php";
                     $query="SELECT *from userm order by userid";
                     $stmt=oci_parse($con,$query);
                     oci_execute($stmt,OCI_DEFAULT);
                    if($stmt)
                    {
                        while (($row = oci_fetch_array($stmt,OCI_BOTH))!=false)
                        {
                             $userid   =  $row['USERID'];
                             $username =  $row['USERNAME'];
                             $email  =  $row['EMAIL'];
                ?>     
                             <tr>
                                 <td><h5><?php echo $userid ?></h5></td>
                                 <td><h5><?php echo $username ?></h5></td>
                                 <td><h5><?php echo $email ?></h5></td>
                                 
                                 <td><a href="updateu.php?Getuserid=<?php echo $userid ?>"><button class="btn btn-primary">Update</button></a></td>
                                 <td><a href="udelete.php?Getuserid=<?php echo $userid ?>"><button class="btn btn-danger">Delete</button></a></td>
                             </tr>
                <?php
                        }
                    }
                ?>

            </table>
       </div>

</body>
</html>
                
                          
                 
                      
                
            
                          
    