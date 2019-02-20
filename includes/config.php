<?php
   $dbhost = 'cis282sp19movies.cfcm6tphpc1c.us-east-1.rds.amazonaws.com';
   $dbuser = 'cis282bush';
   $dbpass = 'pippen33';
   $dbname = 'cis282sp19movies';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   if(! $conn )
   {
     die('Could not connect to instance: ' . mysqli_error($conn));
   }
  
  
?>