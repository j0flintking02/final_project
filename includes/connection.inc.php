<?php
$server = 'localhost';
$userName = 'root';
$pwd = '';
$DB = 'online_ticket';
$conn = mysqli_connect($server, $userName, $pwd, $DB) 
        or 
        
        die('failed to connect to the database');
?>
