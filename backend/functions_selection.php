<?php 
session_start();
 $activity_number =$_REQUEST['Activity']; // output 2489

 $section = $_SESSION['section_number'];
 $Main_form_number = $_SESSION['form_number'];

if ($Main_form_number == 1 ) {
	if ($section == 1) { header('Location: ../primary_section_form.php'); }

	if ($section == 2) { if($activity_number == 1) { header('Location: ../form/1_Student_Achievement/secondary_form_1_2_1.php'); } 
						if($activity_number == 2) { header('Location: ../form/1_Student_Achievement/secondary_form_1_2_2.php'); }
						if($activity_number == 3) { header('Location: ../form/1_Student_Achievement/secondary_form_1_2_3.php'); }
						if($activity_number == 4) { header('Location: ../form/1_Student_Achievement/secondary_form_1_2_4.php'); }
						if($activity_number == 5) { header('Location: ../form/1_Student_Achievement/secondary_form_1_2_5.php'); } 


} 
}
if ($Main_form_number == 2 ) { header('Location: ../form/2_Learning_Teaching_and_Assessment/secondary_form_2.php'); }

if ($Main_form_number == 3 ) { header('Location: ../form/3_Formal_Curriculum_Management/secondary_form_3.php'); }

if ($Main_form_number == 4 ) { header('Location: ../form/4_Co_curricular_Activities/secondary_form_4.php'); }

if ($Main_form_number == 5 ) { header('Location: ../form/5_Student_Welfare/secondary_form_5.php'); }

if ($Main_form_number == 6 ) { header('Location: ../form/6_Leadership_and_Management/secondary_form_6.php'); }

if ($Main_form_number == 7 ) { header('Location: ../form/7_Physical_Resource_Management/secondary_form_7.php'); }

if ($Main_form_number == 8 ) { header('Location: ../form/8_School_and_Community/secondary_form_8.php'); }



?>