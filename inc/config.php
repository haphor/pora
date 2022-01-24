<?php
    $servername='localhost';
    // $servername='bukkyboyo97333.domaincommysql.com';
    $username='pora_worker';
    $password='En5!n3r()m';
    $dbname = 'pora_customer';
   
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
        // die('Could not Connect MySql Server:' .mysql_error());
        die('Could not Connect MySql Server');
    }
?>