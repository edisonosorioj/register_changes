<?php

$dbhostname = '127.0.0.1';
$dbusername = 'root';
$dbpassword = 'qwer1234';

$link = mysqli_connect($dbhostname,$dbusername, $dbpassword,"cied_core_4") or die("Error " . mysqli_error($link)); 
 
$query = "SELECT * FROM register_changes_reports order by modification_date DESC" or die("Error in the consult.." . mysqli_error($link)); 

$result = $link->query($query);
?>