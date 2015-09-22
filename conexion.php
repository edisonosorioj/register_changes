<?php

$dbhostname = '127.0.0.1';
$dbusername = 'root';
$dbpassword = 'qwer1234';

$link = mysqli_connect($dbhostname,$dbusername, $dbpassword,"cied_core_4") or die("Error " . mysqli_error($link)); 
 
$query = "SELECT * FROM register_changes_reports order by modification_date DESC" or die("Error in the consult.." . mysqli_error($link)); 

$result = $link->query($query);

//Paginacion

$limit = 12;

$pagina = $_GET["pagina"];
// if ($pag < 1){
// 	$pag = 1;
// }
// $offset = ($pag-1) * $limit;

// $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM register_changes_reports LIMIT $offset, $limit";
// $sqlTotal = "SELECT FOUND_ROWS() as total";

// $rs = mysql_query($sql);
// $rsTotal = mysql_query($sqlTotal);

// $rowTotal = mysql_fetch_array($rsTotal);

// $total = $rowTotal["total"];
?>