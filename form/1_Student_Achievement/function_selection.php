<?php 
session_start();
 echo $function_number =$_REQUEST['function']; 


	if ($function_number > 1 && $function_number < 7  ) {
	header('Location: main_subjects_form.php');}

	if ($function_number > 6 && $function_number < 12  ) {
	header('Location: other_subjects_form.php');}

	if ($function_number > 11 && $function_number < 18  ) {
	header('Location:  main_subjects_form.php');}

	if ($function_number >= 18) {
		header('Location: optional_subjects_form.php');}

?>