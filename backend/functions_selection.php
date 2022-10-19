<?php 
session_start();
 $activity_number =$_REQUEST['Activity']; // output 2489

 $section = $_SESSION['section_number'];
 $Main_form_number = $_SESSION['form_number'];

if ($Main_form_number == 1 ) {
	if ($section == 1) { header('Location: ../primary_section_form.php'); }

	if ($section == 2) { if($activity_number == 1) { header('Location: ../form_secondary_1.php'); } 
						if($activity_number == 2) { header('Location: ../form_secondary_2.php'); }
						if($activity_number == 3) { header('Location: ../form_secondary_3.php'); }
						if($activity_number == 4) { header('Location: ../form_secondary_4.php'); } 


}
}

?>