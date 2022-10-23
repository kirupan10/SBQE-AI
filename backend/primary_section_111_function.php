<?php 
include "config.php";
if(isset($_POST['submit_primary_section'])){

    $data1 = mysqli_real_escape_string($con,$_POST['totalNumbersOfTheStudents1111']);
    $data2 = mysqli_real_escape_string($con,$_POST['totalPercentageOfTheStudents1111']);

    $data3 = mysqli_real_escape_string($con,$_POST['totalNumbersOfTheStudents1112']);
    $data4 = mysqli_real_escape_string($con,$_POST['totalPercentageOfTheStudents1112']);

    $data5 = mysqli_real_escape_string($con,$_POST['totalNumbersOfTheStudents1113']);
    $data6 = mysqli_real_escape_string($con,$_POST['totalPercentageOfTheStudents1113']);


    if ($data1 != "" && $data2 != "" && $data3 != "" && $data4 != "" && $data5 != "" && $data6 != ""){


        if ($data2 > 0 && $data2 < 25 ) {
            $marks_1 = "1";
            $status = "Immediate development required";
        }

        if ($data2 >= 25 && $data2 < 45 ) {
            $marks_1 = "2";
            $status = "Development Required";
        }

        if ($data2 >= 45 && $data2 < 60 ) {
            $marks_1 = "3";
            $status = "Satisfactory";
        }

        if ($data2 >= 60 && $data2 < 75 ) {
            $marks_1 = "4";
            $status = "Good";
        }

        if ( $data2 >= 75 && $data2 < 90 ) {
            $marks_1 = "5";
            $status = "Very Good";
        }

         if ( $data2 >= 90 ) {
            $marks_1 = "6";
            $status = "Excellent";
        }

// if condition for the second data input 

        if ($data4 > 0 && $data4 < 25 ) {
            $marks_2 = "1";
            $status_2 = "Immediate development required";
        }

        if ($data4 >= 25 && $data4 < 45 ) {
            $marks_2 = "2";
            $status_2 = "Development Required";
        }

        if ($data4 >= 45 && $data4 < 60 ) {
            $marks_2 = "3";
            $status_2 = "Satisfactory";
        }

        if ($data4 >= 60 && $data4 < 75 ) {
            $marks_2 = "4";
            $status_2 = "Good";
        }

        if ( $data4 >= 75 && $data4 < 90 ) {
            $marks_2 = "5";
            $status_2 = "Very Good";
        }

         if ( $data4 >= 90 ) {
            $marks_2 = "6";
            $status_2 = "Excellent";
        }

        // 3rd input if condition 

        if ($data6 > 0 && $data6 < 25 ) {
            $marks_3 = "1";
            $status_3 = "Immediate development required";
        }

        if ($data6 >= 25 && $data6 < 45 ) {
            $marks_3 = "2";
            $status_3 = "Development Required";
        }

        if ($data6 >= 45 && $data6 < 60 ) {
            $marks_3 = "3";
            $status_3 = "Satisfactory";
        }

        if ($data6 >= 60 && $data6 < 75 ) {
            $marks_3 = "4";
            $status_3 = "Good";
        }

        if ( $data6 >= 75 && $data6 < 90 ) {
            $marks_3 = "5";
            $status_3 = "Very Good";
        }

         if ( $data6 >= 90 ) {
            $marks_3 = "6";
            $status_3 = "Excellent";
        }
        

        $sql_insert_datarow_1 = "INSERT INTO pimary_section_111 (Activity_Number,School_ID,Name,totalNumbersOfTheStudents,totalPercentageOfTheStudents,marks,   status) VALUE ('111','{$_SESSION['school_id']}','{$_SESSION['username']}',$data1,$data2,'$marks_1','$status')";

        $sql_insert_datarow_2 = "INSERT INTO pimary_section_111 (Activity_Number,School_ID,Name,totalNumbersOfTheStudents,totalPercentageOfTheStudents,marks,   status) VALUE ('112','{$_SESSION['school_id']}','{$_SESSION['username']}',$data3,$data4,'$marks_2','$status_2')";

        $sql_insert_datarow_3 = "INSERT INTO pimary_section_111 (Activity_Number,School_ID,Name,totalNumbersOfTheStudents,totalPercentageOfTheStudents,marks,   status) VALUE ('113','{$_SESSION['school_id']}','{$_SESSION['username']}',$data5,$data6,'$marks_3','$status_3')";

        $result_1 = mysqli_query($con,$sql_insert_datarow_1);
        $result_2 = mysqli_query($con,$sql_insert_datarow_2);
        $result_3 = mysqli_query($con,$sql_insert_datarow_3);
        
        

        if($result_1 && $result_2 && $result_3 ){ }else{ echo("Error description: " . mysqli_error($con));
        }

        

    }

}


$marks = "";
$status = "";
$totalNumbersOfTheStudents = "";
$totalPercentageOfTheStudents = "";

$marks2 = "";
$status2 = "";
$totalNumbersOfTheStudents2 = "";
$totalPercentageOfTheStudents2 = "";

$marks3 = "";
$status3 = "";
$totalNumbersOfTheStudents3 = "";
$totalPercentageOfTheStudents3 = "";


$sql = "SELECT  marks,status,totalNumbersOfTheStudents,totalPercentageOfTheStudents FROM pimary_section_111 WHERE Activity_Number ='111' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks = $row["marks"];   // The value we usually set is the primary key
         $status = $row["status"]; // The value we usually set is the primary key
         $totalNumbersOfTheStudents = $row["totalNumbersOfTheStudents"];   // The value we usually set is the primary key
         $totalPercentageOfTheStudents = $row["totalPercentageOfTheStudents"]; } // The value we usually set is the primary key
        
         
       } else { $marks = ""; $status = ""; } // While loop must be terminated 

// 2nd output
$sql2 = "SELECT  marks,status,totalNumbersOfTheStudents,totalPercentageOfTheStudents FROM pimary_section_111 WHERE Activity_Number ='112' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result2 = $con->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) { 
        
         $marks2 = $row["marks"];   // The value we usually set is the primary key
         $status2 = $row["status"];  // The value we usually set is the primary key
         $totalNumbersOfTheStudents2 = $row["totalNumbersOfTheStudents"];   // The value we usually set is the primary key
         $totalPercentageOfTheStudents2 = $row["totalPercentageOfTheStudents"]; } // The value we usually set is the primary key
        
         
       } else { $marks2 = ""; $status2 = ""; } // While loop must be terminated 



// 3nd output
$sql3 = "SELECT  marks,status,totalNumbersOfTheStudents,totalPercentageOfTheStudents FROM pimary_section_111 WHERE Activity_Number ='113' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result3 = $con->query($sql3);

if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) { 
        
         $marks3 = $row["marks"];   // The value we usually set is the primary key
         $status3 = $row["status"];  // The value we usually set is the primary key
         $totalNumbersOfTheStudents3 = $row["totalNumbersOfTheStudents"];  // The value we usually set is the primary key
         $totalPercentageOfTheStudents3 = $row["totalPercentageOfTheStudents"]; } // The value we usually set is the primary key
        
         
       } else { $marks3 = ""; $status3 = ""; } // While loop must be terminated 

?>