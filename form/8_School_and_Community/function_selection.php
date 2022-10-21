<?php 
session_start();
 $Main_form_number =$_REQUEST['function']; // output 2489


if ($Main_form_number == 1 ) { header('Location: school.8.1.php'); }

if ($Main_form_number == 2 ) { header('Location: school.8.2.php'); }

if ($Main_form_number == 3 ) { header('Location: school.8.3.php'); }

if ($Main_form_number == 4 ) { header('Location: school.8.4.php'); }

if ($Main_form_number == 5 ) { header('Location: school.8.5.php'); }

?>