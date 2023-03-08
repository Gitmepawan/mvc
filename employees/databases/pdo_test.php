<?php
		$dsn = "mysql:host=localhost;dbname=employees;charset=utf8mb4";
		try {
		  $connection = new PDO($dsn, 'root', 'root');
		} catch (Exception $e) {
		  error_log($e->getMessage());
		  exit('unable to connect');
		}

		$stmt = $connection->prepare("SELECT * FROM tbl_employees ORDER BY emp_lname ASC");
		$stmt->execute();
		$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
		if(!$arr) exit('No results returned.');
		print_r($arr);
		$stmt = null;

?>