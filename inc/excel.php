<?php
include_once("config.php");
$sqlQuery = "SELECT id, email FROM wait_list";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$waitersData = array();
while( $waiter = mysqli_fetch_assoc($resultSet) ) {
	$waitersData[] = $waiter;
}	
if(isset($_POST["dataExport"])) {	
	$fileName = "pora_export_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");	
	$showColoumn = false;
	if(!empty($waitersData)) {
	  foreach($waitersData as $waiterInfo) {
		if(!$showColoumn) {		 
		  echo implode("\t", array_keys($waiterInfo)) . "\n";
		  $showColoumn = true;
		}
		echo implode("\t", array_values($waiterInfo)) . "\n";
	  }
	}
	exit;  
}
?>