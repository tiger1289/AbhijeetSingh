<?php
include('connection.php');
if(!empty($_POST["FirstName"]) && !empty($_POST["LastName"]) && !empty($_POST["MoolyaId"]) && !empty($_POST["Education"])){
	
	$FirstName = $_POST["FirstName"];
	$LastName = $_POST["LastName"];
	$MoolyaId = $_POST["MoolyaId"];
	$Education = $_POST["Education"];
	
	$insert_data_array = array(
	'firstname' => $FirstName,
	'lastname' => $LastName,
	'moolyaid' => $MoolyaId,
	'education' => $Education
	);
	$connect_arr["insert_data"]->insert($insert_data_array);
	$connect_arr["driver_connection"]->executeBulkWrite('form.detail', $connect_arr["insert_data"]);
	echo "inserted";
}
else{
    echo "error";
}
?>