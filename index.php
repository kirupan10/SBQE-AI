<?php 


session_start();

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "sbqeai"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name,School_ID,grade FROM user WHERE email ='{$_SESSION['email']}' LIMIT 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $username = "". $row["name"]. "<br>";   // The value we usually set is the primary key
         $school_id = "". $row["School_ID"]. "<br>";  // The value we usually set is the primary key
         $grade = "". $row["grade"]. "<br>"; }  // The value we usually set is the primary key
         
        } else { echo "0 results"; } // While loop must be terminated 






$sql1 = "SELECT School_ID FROM user WHERE email ='{$_SESSION['email']}' LIMIT 1 ";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) { 
         $school_id = "". $row["School_ID"]. "<br>"; }  // The value we usually set is the primary key
         
        } else { echo "0 results"; } // While loop must be terminated 

 $school_id;

$sql_school = "SELECT School_Name FROM schools_details WHERE School_ID ='$school_id' LIMIT 1";
$result_school = $conn->query($sql_school);

if ($result_school->num_rows > 0) {
    // output data of each row
    while($row = $result_school->fetch_assoc()) { 
         $school_name = "". $row["School_Name"]. "<br>"; }  // The value we usually set is the primary key
         
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
                        <p> Small explaination about what is activities and how to select/use guide <br> lines </p>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <a href="select_form.php?form=1" class="btn btn-simple">1. Student Achievement </a> <br>
                            <a href="select_form.php?form=2" class="btn btn-simple">2. Learning, Teaching and Assessment</a> <br>
                            <a href="select_form.php?form=3" class="btn btn-simple">3. Formal Curriculum Management</a> <br>
                            <a href="select_form.php?form=4" class="btn btn-simple">4. Co - curricular Activities</a> <br>
                            <a href="select_form.php?form=5" class="btn btn-simple">5. Student Welfare</a> <br>
                            <a href="select_form.php?form=6" class="btn btn-simple">6. Leadership and Management</a> <br>
                            <a href="select_form.php?form=7" class="btn btn-simple">7. Physical Resource Management</a> <br>
                            <a href="select_form.php?form=8" class="btn btn-simple">8. School and Community</a> <br>
                        </div>
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

