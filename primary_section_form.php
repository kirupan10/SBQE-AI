<?php 

include "backend/config.php";


if(isset($_POST['submit_primary_section'])){

    $data1 = mysqli_real_escape_string($con,$_POST['totalNumbersOfTheStudents1111']);
    $data2 = mysqli_real_escape_string($con,$_POST['totalPercentageOfTheStudents1111']);

    $data3 = mysqli_real_escape_string($con,$_POST['totalNumbersOfTheStudents1112']);
    $data4 = mysqli_real_escape_string($con,$_POST['totalPercentageOfTheStudents1112']);

    $data5 = mysqli_real_escape_string($con,$_POST['totalNumbersOfTheStudents1113']);
    $data6 = mysqli_real_escape_string($con,$_POST['totalPercentageOfTheStudents1113']);


    if ($data1 != "" && $data2 != "" && $data3 != "" && $data4 != "" && $data5 != "" && $data6 != ""){


        if ($data2 > 0 && $data2 < 35 ) {
            $marks_1 = "F";
            $status = "F";
        }

        if ($data2 > 35 && $data2 < 55 ) {
            $marks_1 = "S";
            $status = "S";
        }

        if ($data2 > 55 && $data2 < 65 ) {
            $marks_1 = "C";
            $status = "C";
        }

        if ($data2 > 65 && $data2 < 75 ) {
            $marks_1 = "B";
            $status = "B";
        }

        if ( $data2 > 75 ) {
            $marks_1 = "A";
            $status = "A";
        }

// if condition for the second data input 

        if ($data4 > 0 && $data4 < 35 ) {
            $marks_2 = "F";
            $status_2 = "F";
        }

        if ($data4 > 35 && $data4 < 55 ) {
            $marks_2= "S";
            $status_2 = "S";
        }

        if ($data4 > 55 && $data4 < 65 ) {
            $marks_2 = "C";
            $status_2 = "C";
        }

        if ($data4 > 65 && $data4 < 75 ) {
            $marks_2 = "B";
            $status_2 = "B";
        }

        if ( $data4 > 75 ) {
            $marks_2 = "A";
            $status_2= "A";
        }

        // 3rd input if condition 

        if ($data6 > 0 && $data6 < 35 ) {
            $marks_3 = "F";
            $status_3= "F";
        }

        if ($data6 > 35 && $data6 < 55 ) {
            $marks_3 = "S";
            $status_3= "S";
        }

        if ($data6 > 55 && $data6 < 65 ) {
            $marks_3 = "C";
            $status_3= "C";
        }

        if ($data6 > 65 && $data6 < 75 ) {
            $marks_3 = "B";
            $status_3 = "B";
        }

        if ( $data6 > 75 ) {
            $marks_3 = "A";
            $status_3= "A";
        }
        

        $sql_insert_datarow_1 = "INSERT INTO pimary_section_111 (Activity_Number,School_ID,Name,totalNumbersOfTheStudents,totalPercentageOfTheStudents,marks,   status) VALUE ('111','{$_SESSION['school_id']}','{$_SESSION['username']}',$data1,$data2,'$marks_1','$status')";

        $sql_insert_datarow_2 = "INSERT INTO pimary_section_111 (Activity_Number,School_ID,Name,totalNumbersOfTheStudents,totalPercentageOfTheStudents,marks,   status) VALUE ('112','{$_SESSION['school_id']}','{$_SESSION['username']}',$data3,$data4,'$marks_2','$status_2')";

        $sql_insert_datarow_3 = "INSERT INTO pimary_section_111 (Activity_Number,School_ID,Name,totalNumbersOfTheStudents,totalPercentageOfTheStudents,marks,   status) VALUE ('113','{$_SESSION['school_id']}','{$_SESSION['username']}',$data5,$data6,'$marks_3','$status_3')";

        $result_1 = mysqli_query($con,$sql_insert_datarow_1);
        $result_2 = mysqli_query($con,$sql_insert_datarow_2);
        $result_3 = mysqli_query($con,$sql_insert_datarow_3);
        
        

        if($result_1 && $result_2 && $result_3 ){
            
            header('Location: index.php');
        }else{
            echo("Error description: " . mysqli_error($con));
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


$sql = "SELECT  marks,status,totalNumbersOfTheStudents,totalPercentageOfTheStudents FROM pimary_section_111 WHERE Activity_Number ='111' && School_ID ='{$_SESSION['school_id']}'  LIMIT 1 ";
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
$sql2 = "SELECT  marks,status,totalNumbersOfTheStudents,totalPercentageOfTheStudents FROM pimary_section_111 WHERE Activity_Number ='112' && School_ID ='{$_SESSION['school_id']}' LIMIT 1 ";
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
$sql3 = "SELECT  marks,status,totalNumbersOfTheStudents,totalPercentageOfTheStudents FROM pimary_section_111 WHERE Activity_Number ='113' && School_ID ='{$_SESSION['school_id']}' LIMIT 1 ";
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

input[type=text]:focus {
  border: 3px solid #555;
}

input[type=number]:focus {
  border: 3px solid #555;
}



</style>



    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SBQE & AI - Form</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
    <?php include "backend/navbar.php";?>

<div class="wrapper">

    <div class="main">
        <div class="section">
         <div class="container tim-container">
            <div class="tim-title">
                <h3><b>School Based Quality Education & Assessment Indicators</b></h3>
            </div>

         

    <div id="labels-badges">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tim-title">
                    <h3> School : <?php echo $_SESSION["school_name"]; ?></h3>
                    <h3> Name : <?php echo $_SESSION["username"]; ?></h3>
                    <p> Form <?php echo "Form details"; ?></p>
                    <p> Small explaination about what is activities and how to select/use guide <br> lines </p>
                        </div>
                        <span class="label label-default">Default</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-success">Success</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>

                    </div>
                    <div class="col-md-6">
                    </div>
                </div> <!-- end row -->
            </div> <!-- end labels-badges -->

<form action="" method="POST">
<table class="styled-table">
  <P> 1.1.1 Reaching the goals of the curriculum (Primary) - Table 1.1.1 </P>
  <thead>
  <tr>
    <th></th>
    <th>Indicators</th>
    <th>Total number of students</th>
    <th>Percentage of students </th>
    <th>Marks</th>
    <th>Status</th>
  </tr>
</thead>
  <tr class="active-row">
    <td>1.1.1.1</td>
    <td>Percentage of students who achieved the 40 competencies at the end of the First Key Stage</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1111" value="<?php echo $totalNumbersOfTheStudents; ?>" required></td>
    <td><input type="number"  autocomplete="off" name="totalPercentageOfTheStudents1111" value="<?php echo $totalPercentageOfTheStudents; ?>" required></td>
    <td><input type="text"  autocomplete="off" disabled value="<?php echo $marks; ?>"></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
  </tr>
  <tr class="active-row" >
    <td>1.1.1.2</td>
    <td>Percentage of students who achieved the 52 competencies at the end of the Second Key Stage</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1112" value="<?php echo $totalNumbersOfTheStudents2; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalPercentageOfTheStudents1112"value="<?php echo $totalPercentageOfTheStudents2; ?>" required ></td>
    <td><input type="text"  autocomplete="off"  value="<?php echo $marks2; ?>" disabled ></td> 
    <td><input type="text"  autocomplete="off" value="<?php echo $status2; ?>"  disabled ></td>
  </tr>
  <tr class="active-row" >
    <td>1.1.1.3</td>
    <td>Percentage of students that has reached the 55 competencies at the end of the Third Key Stage</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalPercentageOfTheStudents1113" value="<?php echo $totalPercentageOfTheStudents3; ?>" required ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $marks3; ?>" disabled ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $status3; ?>"  disabled></td>
  </tr>
</table>
<center> <input class="form-submit-button "  type="submit"  id="submit_primary_section" name="submit_primary_section" placeholder='Sumbit' onclick="register(event)">
</center>
</form>

    
<p> </p> 
<br> 
<br>
 <br> 
 <br>

<form>
<table class="styled-table" >
  <P> 1.1.2 Achievement in national examination results - Table 1.1.2 </P>
  <thead>
  <tr>
    <th></th>
    <th>Indicators</th>
    <th>Total number of students </th>
    <th>Percentage</th>
    <th>Marks</th>
    <th>Status</th>
  </tr>
</thead>
  <tr class="active-row" >
    <td>1.1.1.1</td>
    <td>Percentage of students who obtained above 70 marks in the Grade 5 Scholarship Examination.</td>
    <td><input type="text" name="data1" autocomplete="off" /></td>
    <td><input type="text" name="data1" autocomplete="off" /></td>
    <td><input type="text" name="data1" autocomplete="off" disabled /></td>
    <td><input type="text" name="data1" autocomplete="off" disabled /></td>
  </tr>
</table>
<center> <input class="form-submit-button "  type="submit" value="Submit"></center>
</form>

<p> </p> 
<br> 
<br>
 <br> 
 <br>

<table class="styled-table">
  <P> </P>
  <thead>
  <tr>
    <th></th>
    <th>Number of Indicators evaluated</th>
    <th>TMaximum marks that can be obtained according to the evaluated indicators </th>
    <th>Total marks
obtained</th>
    <th>Percentage</th>
  </tr>
</thead>
  <tr class="active-row" >
    <td>1.1.1.1</td>
    <td><input type="text" name="data1" autocomplete="off" disabled /></td>
    <td><input type="text" name="data1" autocomplete="off" disabled/></td>
    <td><input type="text" name="data1" autocomplete="off" disabled /></td>
    <td><input type="text" name="data1" autocomplete="off" disabled /></td>
  </tr>
</table>

<p> </p> 
<br> 
<br>
 <br> 
 <br>


<form>
<table class="styled-table">
  <P> User conformination</P>
  
  <tr>
        <td></td>
  </tr>
  
  <tr>
    <td></td>
    <td>Name of the evaluator</td>
    <td><input type="text" name="data1" autocomplete="off" /></td>
    <td></td>
  </tr>

  <tr class="active-row" >
    <td></td>
    <td>Date</td>
    <td><input type="date" name="data1" autocomplete="off" /></td>
    <td></td>
    
  </tr>
  <tr class="active-row" >
    <td> </td>
    
    <td><center><input class="form-submit-button " type="submit" value="Final - Submit" name="data1" autocomplete="off" /></td></center>

  </tr>
</table>

</form>

                
            <br> <br>

            </div>
    </div>
</div>




<?php include "backend/footer.php";?>
</div>


</body>

    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

    <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>

    <!--  Plugins -->
    <script src="assets/js/ct-paper-checkbox.js"></script>
    <script src="assets/js/ct-paper-radio.js"></script>
    <script src="assets/js/bootstrap-select.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>

    <script src="assets/js/ct-paper.js"></script>
</html>
