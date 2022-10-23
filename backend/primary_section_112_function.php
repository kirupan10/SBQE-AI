<?php include "config.php";
if(isset($_POST['submit_2nd_button'])){

    $Students_Total = mysqli_real_escape_string($con,$_POST['Students_Total_2nd_Form']);
    $Students_Percentage = mysqli_real_escape_string($con,$_POST['Students_Percentage_2nd_Form']);


if ($Students_Total != "" && $Students_Percentage != "" ){


        if ($Students_Percentage > 0 && $Students_Percentage < 25 ) {
            $students_marks = "1";
            $students_status = "Immediate development required";
        }

        if ($Students_Percentage >= 25 && $Students_Percentage < 45 ) {
            $students_marks = "2";
            $students_status = "Development Required";
        }

        if ($Students_Percentage >= 45 && $Students_Percentage < 60 ) {
            $students_marks = "3";
            $students_status = "Satisfactory";
        }

        if ($Students_Percentage >= 60 && $Students_Percentage < 75 ) {
            $students_marks = "4";
            $students_status = "Good";
        }

        if ( $Students_Percentage >= 75 && $Students_Percentage < 90 ) {
            $students_marks = "5";
            $students_status = "Very Good";
        }
        if ( $Students_Percentage >= 90 ) {
            $students_marks = "6";
            $students_status = "Excellent";
        }


        $sql_insert_students_row = "INSERT INTO pimary_section_112 (Activity_Number,School_ID,Name,totalNumbersOfTheStudents,totalPercentageOfTheStudents,marks,   status) VALUE ('112','{$_SESSION['school_id']}','{$_SESSION['username']}',$Students_Total,$Students_Percentage,'$students_marks','$students_status')";

        $result_students = mysqli_query($con,$sql_insert_students_row);

if($result_students){
        }else{
            echo("Error description: " . mysqli_error($con));
        }

        

    }

}


$markstudents = "";
$statusstudents = "";
$students_number_total = "";
$students_percentage_total = "";

$sql = "SELECT  marks,status,totalNumbersOfTheStudents,totalPercentageOfTheStudents FROM pimary_section_112 WHERE Activity_Number ='112' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC  LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $markstudents = $row["marks"];   // The value we usually set is the primary key
         $statusstudents = $row["status"]; // The value we usually set is the primary key
         $students_number_total = $row["totalNumbersOfTheStudents"];   // The value we usually set is the primary key
         $students_percentage_total = $row["totalPercentageOfTheStudents"]; } // The value we usually set is the primary key
        
         
       } else { $marks = ""; $status = ""; } // While loop must be terminated 






?>