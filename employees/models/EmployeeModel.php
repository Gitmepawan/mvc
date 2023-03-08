<?php
require_once('database.php');

classs EmployeeModel extends Database {

    public functio _construct() {

        parent::_construct();
        
        $this->table = 'tbl_employees';
        $this->fields = 'emp_lname, emp_fname,emp_job,emp_image,emp_thumb';

    }

    public function newEmployee() {
        // where we provide the statement parts specific to the 


    }
    public function updateEmployee($id) {

    }
    public function deleteEmployee($id) {

    }

}


?>