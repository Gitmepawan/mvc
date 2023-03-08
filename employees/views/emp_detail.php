<div id="content" class="row">
<?php

echo 
			'<div class="col-12 med-col-2"><img id="empImage" alt="Employee Photo" src="images/'.$employees[0]->emp_image.'"></div>
			<div id="empDetails" class="col-12 med-col-10"> <span class="centerDetails"><span class="label">Name:</span> '.$employees[0]->emp_lname.', '.$employees[0]->emp_fname.'<br>
			<span class="label">Employee ID:</span> '.$employees[0]->id.'<br>
			<span class="label">Position:</span> '.$employees[0]->emp_job.'<br></span></div>'
		;
?>
<br><br>
<div id="content" class="row">
<?php	
echo '<a href="http://localhost:8888/pdo_employees/index.php?task=delete&id='.$employees[0]->id.'">delete employee</a><br>';
echo '<a href="http://localhost:8888/pdo_employees/index.php?task=update&id='.$employees[0]->id.'">update employee</a>';
?>
</div>