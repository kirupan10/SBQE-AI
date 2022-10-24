<?php
include "backend/function_loggedin.php";

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "sbqeai"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}


if( !isset($_SESSION['email']) ){
    die( "Login required." );
}


$sql = "SELECT name,School_ID,grade FROM user WHERE email ='{$_SESSION['email']}' LIMIT 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $username = $row["name"];   // The value we usually set is the primary key
         $school_id = $row["School_ID"];  // The value we usually set is the primary key
         $grade = $row["grade"]; }  // The value we usually set is the primary key
         
        } else { echo "0 results"; } // While loop must be terminated 






$sql1 = "SELECT School_ID FROM user WHERE email ='{$_SESSION['email']}' LIMIT 1 ";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) { 
         $school_id = $row["School_ID"]; }  // The value we usually set is the primary key
         
        } else { echo "0 results"; } // While loop must be terminated 

 $school_id;

$sql_school = "SELECT School_Name FROM schools_details WHERE School_ID ='$school_id' LIMIT 1";
$result_school = $conn->query($sql_school);

if ($result_school->num_rows > 0) {
    // output data of each row
    while($row = $result_school->fetch_assoc()) { 
         $school_name = $row["School_Name"]; }  // The value we usually set is the primary key
         
        } else { echo "0 results"; } // While loop must be terminated 

  $_SESSION['school_name'] =  $school_name;
  $_SESSION['school_id'] =  $school_id;
  $_SESSION['username'] =  $username;
  $_SESSION['grade'] =  $grade;

$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <style>

.button {
    display: block;
    width: 500px;
    height: 45px;
    background: #677173;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 15%;
  padding: 40px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
    
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SBQE & AI -  Form</title>

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
                    <div class="tim-title">
                        <h3> Hi, <?php echo $username;?></h3>
                        <h3> School : <?php echo $school_name ;   ?></h3>
                        <p>  Grade : <?php echo $grade ;  ?></p>
                        <p> </p>
                    </div>
                    <h3>Form and Activities</h3>

<div class="row">
  <div class="column" class="polaroid">
    <img src=" form.png" alt="Snow" style="width:100%">
     <a href="select_form.php?form=1">1. Student Achievement </a>
  </div>
  <div class="column" class="polaroid" >
    <img src=" form.png" alt="Forest" style="width:100%">
    <a href="form/2_Learning_Teaching_and_Assessment/secondary_form_2.php" >2. Learning, Teaching and Assessment</a>
  </div>
  <div class="column" class="polaroid">
    <img src=" form.png" alt="Mountains" style="width:100%">
    <a href="form/3_Formal_Curriculum_Management/secondary_form_3.php" >3. Formal Curriculum Management</a> <br>
  </div>
  <div class="column">
    <img src=" form.png" alt="Mountains" style="width:100%">
    <a href="form/4_Co_curricular_Activities/secondary_form_4.php">4. Co - curricular Activities</a> <br>
  </div>
  <div class="column">
    <img src=" form.png" alt="Mountains" style="width:100%">
    <a href="form/5_Student_Welfare/secondary_form_5.php" >5. Student Welfare</a>
  </div>
  <div class="column">
    <img src=" form.png" alt="Mountains" style="width:100%">
    <a href="form/6_Leadership_and_Management/secondary_form_6.php">6. Leadership and Management</a> 
  </div>
  <div class="column">
    <img src=" form.png" alt="Mountains" style="width:100%">
    <a href="form/7_Physical_Resource_Management/secondary_form_7.php" >7. Physical Resource Management</a> 
  </div>
  <div class="column">
    <img src=" form.png" alt="Mountains" style="width:100%">
    <a href="form/8_School_and_Community/secondary_form_8.php" >8. School and Community</a>
  </div>
  
</div>
                    <h3>Total Submision form</h3>
                    <div class="column">
    <img src=" form.png" alt="Mountains" style="width:100%">
    <a href="form/Total_Evaluation/Total_Evaluation.php" >Total_Evaluation</a>
  </div>
                </div>
                <br />
            </div> <!-- end menu-dropdown -->

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

