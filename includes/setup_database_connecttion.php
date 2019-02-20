<?php
   $dbhost = 'AWS Endpoint';
   $dbuser = 'Database Username';
   $dbpass = 'Datebase Password';
   $dbname = 'Database Name';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   if(! $conn )
   {
     die('Could not connect to instance: ' . mysqli_error($conn));
   }
  
  
?>