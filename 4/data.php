<?php
include_once "config.php";

// $con = mysqli_connect("localhost","my_user","my_password","my_db");
// $con = mysqli_connect("localhost","root","","tasks");
// $connection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$connection = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if (!$connection) {
	throw new Exception("Cannot connect to database");
}else {
	echo "Connected<br/>";
	// insert a record
	// INSERT INTO tasks (task, date) VALUES ('Do something', '2020-09-08');
	// echo mysqli_query($connection, "INSERT INTO tasks (task, date) VALUES ('Do something more', '2020-09-11')");
	// SELECT * FROM tasks
	/*$result = mysqli_query($connection, "SELECT * FROM tasks");
	while($data = mysqli_fetch_assoc($result)){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}*/

	// mysqli_query($connection, 'DELETE FROM tasks');
	mysqli_close($connection);
}