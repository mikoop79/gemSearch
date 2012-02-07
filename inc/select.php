<?php 

//echo 'this is the populate php script';

function selectRow($item, $table ) {
	
  $connection = mysql_connect(DB_HOST_PORT, DB_USER, DB_PASS);
  $query = "SELECT ".$item." FROM " .$table. ";";
  $result = mysql_query($query, $connection);

  return $result;

}

// function to select distinct row by item from table order by item, last arg is min or max.
function selectDistinctRow($item, $table, $order ) {
	
  $connection = mysql_connect(DB_HOST_PORT, DB_USER, DB_PASS);
  $query = "SELECT DISTINCT ".$item." FROM " .$table. " ORDER BY ".$item." ".$order;
  $result = mysql_query($query, $connection);
  return $result;

}

function selectIDRow($id, $item,  $table ) {
	
  $connection = mysql_connect(DB_HOST_PORT, DB_USER, DB_PASS);
  $query = "SELECT ".$id.", ".$item." FROM " .$table. ";";
  $result = mysql_query($query, $connection);
  return $result;



}

// functions
function error_for($name){
  global $errors;
  
  	

 if($errors[$name]){ 
	return "<p class='error'>" . $errors[$name] . "</p>";
 }
 
 
}


function getRegionID($region_id){
	$connection = mysql_connect(DB_HOST_PORT, DB_USER, DB_PASS);
	$query = "SELECT region_id from winery WHERE winery_id = ".$region_id;
	$id = mysql_query($query, $connection);
	return $id;
}




function callAjax(){
	echo "<script> \n";
	echo "ajaxFunction(); \n";
	echo "</script> \n";

}



?>