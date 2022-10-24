<?php session_start();
include "../backend/config.php";
if(isset($_POST['submit_primary_section'])){

    $data1 = mysqli_real_escape_string($con,$_POST['marks1']);
    $data2 = mysqli_real_escape_string($con,$_POST['marks2']);

    $data3 = mysqli_real_escape_string($con,$_POST['marks3']);
    $data4 = mysqli_real_escape_string($con,$_POST['marks4']);

    $data5 = mysqli_real_escape_string($con,$_POST['marks5']);
    $data6 = mysqli_real_escape_string($con,$_POST['marks6']);


if ($data1 != "" && $data2 != "" && $data3 != "" && $data4 != "" && $data5 != "" && $data6 != ""){

            if ($data1 > 0 && $data1 < 25 ) {
            $marks_1 = "1";
            $status_1 = "Immediate development required";
            $color_1 = "red";
        }

        if ($data1 >= 25 && $data1 < 45 ) {
            $marks_1 = "2";
            $status_1 = "Development Required";
            $color_1 = "orange";
        }

        if ($data1 >= 45 && $data1 < 60 ) {
            $marks_1 = "3";
            $status_1 = "Satisfactory";
            $color_1 = "purple";
        }

        if ($data1 >= 60 && $data1 < 75 ) {
            $marks_1 = "4";
            $status_1 = "Good";
            $color_1 = "yellow";
        }

        if ( $data1 >= 75 && $data1 < 90 ) {
            $marks_1 = "5";
            $status_1 = "Very Good";
            $color_1 = "#26ab63";
        }

         if ( $data1 >= 90 ) {
            $marks_1 = "6";
            $status_1 = "Excellent";
            $color_1 = "#124429";
        }

        // 2nd below


        if ($data2 > 0 && $data2 < 25 ) {
            $marks_2 = "1";
            $status_2 = "Immediate development required";
            $color_2 = "red";
        }

        if ($data2 >= 25 && $data2 < 45 ) {
            $marks_2 = "2";
            $status_2 = "Development Required";
            $color_2 = "orange";
        }

        if ($data2 >= 45 && $data2 < 60 ) {
            $marks_2 = "3";
            $status_2 = "Satisfactory";
            $color_2 = "purple";
        }

        if ($data2 >= 60 && $data2 < 75 ) {
            $marks_2 = "4";
            $status_2 = "Good";
            $color_2 = "yellow";
        }

        if ( $data2 >= 75 && $data2 < 90 ) {
            $marks_2 = "5";
            $status_2 = "Very Good";
            $color_2 = "#26ab63";
        }

         if ( $data2 >= 90 ) {
            $marks_2 = "6";
            $status_2 = "Excellent";
            $color_2 = "#124429";
        }

        // 3rd below

if ($data3 > 0 && $data3 < 25 ) {
            $marks_3 = "1";
            $status_3 = "Immediate development required";
            $color_3 = "red";
        }

        if ($data3 >= 25 && $data3 < 45 ) {
            $marks_3 = "2";
            $status_3 = "Development Required";
            $color_3 = "orange";
        }

        if ($data3 >= 45 && $data3 < 60 ) {
            $marks_3 = "3";
            $status_3 = "Satisfactory";
            $color_3 = "purple";
        }

        if ($data3 >= 60 && $data3 < 75 ) {
            $marks_3 = "4";
            $status_3 = "Good";
            $color_3 = "yellow";
        }

        if ( $data3 >= 75 && $data3 < 90 ) {
            $marks_3 = "5";
            $status_3 = "Very Good";
            $color_3 = "#26ab63";

        }

         if ( $data3 >= 90 ) {
            $marks_3 = "6";
            $status_3 = "Excellent";
            $color_3 = "#124429";
            
        }

        // 4th below
// if condition for the second data input 

        if ($data4 > 0 && $data4 < 25 ) {
            $marks_4 = "1";
            $status_4 = "Immediate development required";
            $color_4 = "red";
        }

        if ($data4 >= 25 && $data4 < 45 ) {
            $marks_4 = "2";
            $status_4 = "Development Required";
            $color_4 = "orange";
        }

        if ($data4 >= 45 && $data4 < 60 ) {
            $marks_4 = "3";
            $status_4 = "Satisfactory";
            $color_4 = "purple";
        }

        if ($data4 >= 60 && $data4 < 75 ) {
            $marks_4 = "4";
            $status_4 = "Good";
            $color_4 = "yellow";
        }

        if ( $data4 >= 75 && $data4 < 90 ) {
            $marks_4 = "5";
            $status_4 = "Very Good";
            $color_4 = "#26ab63";

        }

         if ( $data4 >= 90 ) {
            $marks_4 = "6";
            $status_4 = "Excellent";
            $color_4 = "#124429";
            
        }



        // 4th below
// if condition for the second data input 

        if ($data5 > 0 && $data5 < 25 ) {
            $marks_5 = "1";
            $status_5 = "Immediate development required";
            $color_5 = "red";
        }

        if ($data5 >= 25 && $data5 < 45 ) {
            $marks_5 = "2";
            $status_5 = "Development Required";
            $color_5 = "orange";
        }

        if ($data5 >= 45 && $data5 < 60 ) {
            $marks_5 = "3";
            $status_5 = "Satisfactory";
            $color_5 = "purple";
        }

        if ($data5 >= 60 && $data5 < 75 ) {
            $marks_5 = "4";
            $status_5 = "Good";
            $color_5 = "yellow";
        }

        if ( $data5 >= 75 && $data5 < 90 ) {
            $marks_5 = "5";
            $status_5 = "Very Good";
            $color_5 = "#26ab63";

        }

         if ( $data5 >= 90 ) {
            $marks_5 = "6";
            $status_5 = "Excellent";
            $color_5 = "#124429";
            
        }

        // 3rd input if condition 

        if ($data6 > 0 && $data6 < 25 ) {
            $marks_6 = "1";
            $status_6 = "Immediate development required";
            $color_6 = "red";
        }

        if ($data6 >= 25 && $data6 < 45 ) {
            $marks_6 = "2";
            $status_6 = "Development Required";
            $color_6 = "orange";
        }

        if ($data6 >= 45 && $data6 < 60 ) {
            $marks_6 = "3";
            $status_6 = "Satisfactory";
            $color_6 = "purple";
        }

        if ($data6 >= 60 && $data6 < 75 ) {
            $marks_6 = "4";
            $status_6 = "Good";
            $color_6 = "yellow";
        }

        if ( $data6 >= 75 && $data6 < 90 ) {
            $marks_6 = "5";
            $status_6 = "Very Good";
            $color_6 = "#26ab63";
        }

         if ( $data6 >= 90 ) {
            $marks_6 = "6";
            $status_6 = "Excellent";
            $color_6 = "#124429";
            
        }
        

        $sql_insert_datarow_1 = "INSERT INTO secondary_form_1_2_1 (Activity_Number,School_ID,Name,percentage,marks,   status) VALUE ('121','{$_SESSION['school_id']}','{$_SESSION['username']}',$data1,'$marks_1','$status_1')";

        $sql_insert_datarow_2 = "INSERT INTO secondary_form_1_2_1 (Activity_Number,School_ID,Name,percentage,marks,   status) VALUE ('122','{$_SESSION['school_id']}','{$_SESSION['username']}',$data2,'$marks_2','$status_2')";

        $sql_insert_datarow_3 = "INSERT INTO secondary_form_1_2_1 (Activity_Number,School_ID,Name,percentage,marks,   status) VALUE ('123','{$_SESSION['school_id']}','{$_SESSION['username']}',$data3,'$marks_3','$status_3')";

        $sql_insert_datarow_4 = "INSERT INTO secondary_form_1_2_1 (Activity_Number,School_ID,Name,percentage,marks,   status) VALUE ('124','{$_SESSION['school_id']}','{$_SESSION['username']}',$data4,'$marks_4','$status_4')";

        $sql_insert_datarow_5 = "INSERT INTO secondary_form_1_2_1 (Activity_Number,School_ID,Name,percentage,marks,   status) VALUE ('125','{$_SESSION['school_id']}','{$_SESSION['username']}',$data5,'$marks_5','$status_5')";

        $sql_insert_datarow_6 = "INSERT INTO secondary_form_1_2_1 (Activity_Number,School_ID,Name,percentage,marks,   status) VALUE ('126','{$_SESSION['school_id']}','{$_SESSION['username']}',$data6,'$marks_6','$status_6')";

        $result_1 = mysqli_query($con,$sql_insert_datarow_1);
        $result_2 = mysqli_query($con,$sql_insert_datarow_2);
        $result_3 = mysqli_query($con,$sql_insert_datarow_3);

        $result_4 = mysqli_query($con,$sql_insert_datarow_4);
        $result_5 = mysqli_query($con,$sql_insert_datarow_5);
        $result_6 = mysqli_query($con,$sql_insert_datarow_6);
        
        

        if($result_1 && $result_2 && $result_3 && $result_4 && $result_5 && $result_6 ){ }else{ echo("Error description: " . mysqli_error($con));
        }

        

    }

}


$dmarks_1 = "";
$dmarks_2 = "";
$dmarks_3 = "";
$dmarks_4 = "";

$dmarks_5 = "";
$dmarks_6 = "";



// 2nd output
$sql = "SELECT  marks,status,percentage FROM secondary_form_1_2_1 WHERE 
Activity_Number ='121' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $dmarks_1 = $row["marks"];   // The value we usually set is the primary key
         $dstatus_1 = $row["status"]; // The value we usually set is the primary key
         $percentage_1 = $row["percentage"];   // The value we usually set is the primary key
        // echo "result 1 debug";
         
       }

}

// 3nd output
$sql2 = "SELECT  marks,status,percentage FROM secondary_form_1_2_1 WHERE 
Activity_Number ='122' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result2 = $con->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) { 
        
         $dmarks_2 = $row["marks"];   // The value we usually set is the primary key
         $dstatus_2 = $row["status"]; // The value we usually set is the primary key
         $percentage_2 = $row["percentage"];   // The value we usually set is the primary key
         // echo "result 2 debug";
        
         
      }
  }

$sql3 = "SELECT  marks,status,percentage FROM secondary_form_1_2_1 WHERE 
Activity_Number ='124' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result3 = $con->query($sql3);

if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) { 
        
         $dmarks_3 = $row["marks"];   // The value we usually set is the primary key
         $dstatus_3 = $row["status"]; // The value we usually set is the primary key
         $percentage_3 = $row["percentage"];   // The value we usually set is the primary key
         // echo "result 3 debug";
        
         
       }
   }


// 3nd output
$sql4 = "SELECT  marks,status,percentage FROM secondary_form_1_2_1 WHERE 
Activity_Number ='124' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result4 = $con->query($sql4);

if ($result4->num_rows > 0) {
    // output data of each row
    while($row = $result4->fetch_assoc()) { 
        
         $dmarks_4 = $row["marks"];   // The value we usually set is the primary key
         $dstatus_4 = $row["status"]; // The value we usually set is the primary key
         $percentage_4 = $row["percentage"];   // The value we usually set is the primary key
        // echo "result 4 debug";
         }

    }


// 3nd output
$sql5 = "SELECT  marks,status,percentage FROM secondary_form_1_2_1 WHERE 
Activity_Number ='125' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result5 = $con->query($sql5);

if ($result5->num_rows > 0) {
    // output data of each row
    while($row = $result5->fetch_assoc()) { 
        
         $dmarks_5 = $row["marks"];   // The value we usually set is the primary key
         $dstatus_5 = $row["status"]; // The value we usually set is the primary key
         $percentage_5 = $row["percentage"];   // The value we usually set is the primary key
       //  echo "result 5 debug";
         
       } 
   }



$sql6 = "SELECT  marks,status,percentage FROM secondary_form_1_2_1 WHERE 
Activity_Number ='126' && School_ID ='{$_SESSION['school_id']}' ORDER BY id  DESC LIMIT 1 ";
$result6 = $con->query($sql6);

if ($result6->num_rows > 0) {
    // output data of each row
    while($row = $result6->fetch_assoc()) { 
        
         $dmarks_6 = $row["marks"];   // The value we usually set is the primary key
         $dstatus_6 = $row["status"]; // The value we usually set is the primary key
         $percentage_6 = $row["percentage"];   // The value we usually set is the primary key
        
         // echo "result 6 debug";
       }
   }

?>

<!doctype html>
<html lang="en">
<head>
            <style >

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}



.styled-table thead tr {
    background-color: #968c8c;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid    #968c8c;
}

.form-submit-button {
background: #968c8c;
color: white;
border-style: outset;
border-color: #968c8c;
height: 50px;
width: 200px;
font: bold15px arial,sans-serif;
text-shadow: none;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=file] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=date] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}

input[type=number]:focus {
  border: 3px solid #555;
}

input[type=file]:focus {
  border: 3px solid #555;
}

input[type=date]:focus {
  border: 3px solid #555;
}




</style>
    <meta charset="utf-8" />
    <link rel="icon" type="../.././image/png" href="../.././assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SBQE & AI - Form</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="../.././bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="../.././assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="../.././assets/css/demo.css" rel="stylesheet" />
    <link href="../.././assets/css/form.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
    <?php include ".././backend/navbar.php";?>

<div class="wrapper">

    <div class="main">
        <div class="section">
         <div class="container tim-container">
            <div class="tim-title">
                <h3><b>School Based Quality Education & Assessment Indicators</b></h3>
            </div>


<form action="" method="POST">
<table class="styled-table">
  <P> 1.2.1 National level examination results - Table 1.2.1</P>
    <h3> Student Achievement <br>
1.2 Secondary Section</h3>
  <p>Awarding marks: Award marks for each indicator according to the following rating scales using the descriptions
given in the indicators.</p>

<p>01 mark – Immediate development required </p>
<p>02 marks – Development required</p>
<p>03 marks - Satisfactory</p>
<p>04 marks – Good </p>
<p>05 marks – Very good</p>
<p>06 marks - Excellent </p>
  <thead>
  <tr>
    <th></th>
    <th>Indicators</th>
    <th>Percentage </th>
    <th>Marks</th>
    <th>Status</th>
    <th>Colour Indicator</th>
  </tr>
</thead>
  <tr class="active-row">
    <td>1.2.1.1</td>
    <td>Qualified for the Advanced Level Examination from the Ordinary Level Examination</td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $percentage_1; ?>" required></td>
    <td><input type="text"  autocomplete="off" disabled value="<?php echo $dmarks_1; ?>"></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $dstatus_1; ?> "></td>
    <td bgcolor="<?php echo $color_1; ?> "></td>
  </tr>
  <tr class="active-row" >
    <td>1.2.1.2</td>
    <td>Qualified for the university entrance from the Advanced Level Examination(ART Stream)</td>
    <td><input type="number"  autocomplete="off" name="marks2" value="<?php echo $percentage_2; ?>" required ></td>
    <td><input type="text"  autocomplete="off"  value="<?php echo $dmarks_2; ?>" disabled ></td> 
    <td><input type="text"  autocomplete="off" value="<?php echo $dstatus_2; ?>"  disabled ></td>
    <td bgcolor="<?php echo $color_2; ?> "></td>
  </tr>
  <tr class="active-row" >
    <td>1.2.1.3</td>
    <td>Qualified for the university entrance from the Advanced Level 
Examination (Commerce</td>
    <td><input type="number"  autocomplete="off" name="marks3" value="<?php echo $percentage_3; ?>" required ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $dmarks_3; ?>" disabled ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $dstatus_3; ?>"  disabled></td>
    <td bgcolor="<?php echo $color_3; ?> "></td>
  </tr>
  <tr class="active-row" >
    <td>1.2.1.4</td>
    <td>Qualified for the university entrance from the Advanced Level 
Examination (Science Stream)</td>
    <td><input type="number"  autocomplete="off" name="marks4" value="<?php echo $percentage_4; ?>" required ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $dmarks_4; ?>" disabled ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $dstatus_4; ?>"  disabled></td>
    <td bgcolor="<?php echo $color_4; ?> "></td>
  </tr>
  <tr class="active-row" >
    <td>1.2.1.5</td>
    <td>Qualified for the university entrance from the Advanced Level 
Examination (Mathematics Stream</td>
    <td><input type="number"  autocomplete="off" name="marks5" value="<?php echo $percentage_5; ?>" required ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $dmarks_5; ?>" disabled ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $dstatus_5; ?>"  disabled></td>
    <td bgcolor="<?php echo $color_5; ?> "></td>
  </tr>
  <tr class="active-row" >
    <td>1.2.1.6</td>
    <td>Qualified for the university entrance from the Advanced Level 
Examination (Technological Strea</td>
    <td><input type="number"  autocomplete="off" name="marks6" value="<?php echo $percentage_6; ?>" required ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $dmarks_6; ?>" disabled ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $dstatus_6; ?>"  disabled></td>
    <td bgcolor="<?php echo $color_6; ?> "></td>
  </tr>
</table>
<center> <input class="form-submit-button "  type="submit"  id="submit_primary_section" name="submit_primary_section" placeholder='Sumbit' onclick="register(event)">
</center>
</form>

    
<a  style="float:right; color: black"; href="" >Go to next page</a>
<a  style="float:left; color: black;" href="" >Go to previous page</a>


                
            <br> <br>

            </div>
    </div>
</div>




<?php include ".././backend/footer.php";?>
</div>


</body>

    <script src="../.././assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../.././assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

    <script src="../.././bootstrap3/js/bootstrap.js" type="text/javascript"></script>

    <!--  Plugins -->
    <script src="../.././assets/js/ct-paper-checkbox.js"></script>
    <script src="../.././assets/js/ct-paper-radio.js"></script>
    <script src="../.././assets/js/bootstrap-select.js"></script>
    <script src="../.././/js/bootstrap-datepicker.js"></script>

    <script src="../.././assets/js/ct-paper.js"></script>
</html>
