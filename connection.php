<?php
   $connection_url= "mongodb+srv://root:trupti123@cluster0.doyqn.mongodb.net/form?retryWrites=true&w=majority";
	$driver_connection = new MongoDB\Driver\Manager($connection_url);
	$insert_data = new MongoDB\Driver\BulkWrite;
	$connect_arr = array(
			'insert_data' => $insert_data,
			'driver_connection' => $driver_connection,
			);
	return $connect_arr;
?>