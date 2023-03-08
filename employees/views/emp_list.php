<div id="content" class="row">
	<ul>
		<?php
		for($i = 0; $i < $rows; $i++) { 
			echo '<a class="col-12 med-col-6" href="index.php?id='.$employees[$i]->id.'"><li>'.$employees[$i]->emp_fname.' '.$employees[$i]->emp_lname.'</li></a>';
		}
		?>
	</ul>
</div>
<div id="content" class="row"><a href="http://localhost:8888/pdo_employees/index.php?task=create"> create new employee</a></div>