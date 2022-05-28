<?php
   $con=oci_connect("system","sunitha","XE");
   if(!$con)
   {
      die(oci_parse_error($con));
      echo "connected";
      oci_close($con);
   }
?>
