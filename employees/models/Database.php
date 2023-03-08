		<?php

		require_once("./includes/config.php");

		class Database {  // our base model class we will extend

				protected $connection;
				protected $table;
				public $rows;
				protected $fields;
				

			public function __construct() {
					$dsn = "mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8mb4";
					try {
					$this->connection = new PDO($dsn, DB_USER, DB_PASS);
					} catch (Exception $e) {
					error_log($e->getMessage());
					exit('unable to connect');
					}
				}

			public function fetchAll() {
				//SELECT * FROM tbl_employees
				$stmt = $this->connection->prepare("SELECT * FROM . $this->table ");
				$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
				if(!$arr) exit('No results returned.');
				return $arr;
				$stmt = null; 

				}


			public function search($fld,$str) {
			//SELECT * FROM tbl_employees WHERE field LIKE %$str%
			$stmt = $this->connection->prepare("SELECT * FROM " .$this->table . " WHERE " . $fld . " LIKE %$str%");
			$stmt->execute(["%$str%"]);
			$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
			$this->rows = $stmt->rowCount();
			if(!$arr) exit('No results returned.');
			return $arr;
			$stmt = null; 

				}

			public function fetchOne($id) {
			//SELECT * FROM tbl_employees WHERE id = $id
			$stmt = $this->connection->prepare("SELECT * FROM " . $this->table . " WHERE id = ?");
			$stmt->execute([$id]);
			$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
			$this->rows = $stmt->rowCount();
			if(!$arr) exit('No results returned.');
			return $arr;
			$stmt = null; 
			}

			protected function create($statement,$values) {
			//INSERT INTO tbl_employees (emp_fname,emp_lname,emp_job,emp_image,emp_thumb) VALUES ('Bob', 'Smith', 'IT', 'person5.jpg','person5th.jpg')
			$stmt = $this->connection->prepare("INSERT INTO " . $this->table . $statement);
			$stmt->execute($values);
			$stmt = null; 
			}

			protected function update($statement,$values) {
			//UPDATE tbl_employees SET emp_fname = 'Robert', emp_lname = 'Smith', emp_job = 'IT', emp_image='person5.jpg', emp_thumb = 'person5th.jpg' WHERE id=$id
			$stmt = $this->connection->prepare("UPDATE " . $this->table . $statement);
			$stmt->execute($values);
			$stmt = null;
			}

			protected function delete($id) {
			//DELETE FROM tbl_employees WHERE id=$id
			$stmt = $this->connection->prepare("DELETE FROM " .$this->table . " WHERE id=?");
			$stmt->execute();
			$stmt = null; 
			}

	
		}


		/* $stmt = $this->connection->prepare();
		$stmt->execute();
		$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
		if(!$arr) exit('No results returned.');
		return $arr;
		$stmt = null; */