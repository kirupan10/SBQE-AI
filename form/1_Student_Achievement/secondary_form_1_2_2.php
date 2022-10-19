<?php 
include "../.././backend/function_loggedin.php";
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "sbqeai"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$i = 0;





$sql = "SELECT subject,activity_number FROM student_achievement_secondary_subjects";
$result = $conn->query($sql);

$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="../.././image/png" href="../.././assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SBQE & AI - School Selection</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="../.././bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="../.././assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="../.././assets/css/demo.css" rel="stylesheet" />

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

                <div class="tim-title">
                    <h3> 1.2.2 Progress of term test marks</h3>
                    <p>  (Prepare the table accordingly if the subjects exceed those listed below)</p>
                    <p> Percentage of students who obtained above 40 marks for each of the following subjects (Grades 6-11) - Table 1.2. 2.1 </p>
                    <br />
                        <div id="navbar-dropdown">
                            <nav class="navbar navbar-default">
                              <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                  <a class="navbar-brand" href="#">Select Subject </a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav pull-right">
<!--                                       default dropdown -->
                                    <li class="dropdown">
                                      <buttonn href="#" class="dropdown-toggle btn" data-toggle="dropdown">Subject<b class="caret"></b></button>
<!--                                  You can add classes for different colours on the next element -->

         


                                        <ul class="dropdown-menu dropdown-menu-right">
                                        
 <?php                                        if ($result->num_rows > 0) {
    // output data of each row
    $v = 0;
    while($row = $result->fetch_assoc()) { $i++;?>

                                        <li onclick="location.href='function_selection.php?function=<?php echo $i; ?>';"><a href=""> <?php echo "". $row["activity_number"]. " : "."". $row["subject"]. "<br>"; }  // The value we usually set is the primary key 
                                         ?></a></li>

                                        

                                        <?php  } else { echo "0 results"; } // While loop must be terminated ?>


                                        
                                      </ul>
                                    </li>
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                              </div><!-- /.container-fluid -->
                            </nav>

                        </div><!--  end navbar -->
                </div>
                <br />
                <div class="tim-title">
                    <h3></h3>
                </div>
            </div> <!-- end menu-dropdown -->

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
    <script src="../.././assets/js/bootstrap-datepicker.js"></script>

    <script src="../.././assets/js/ct-paper.js"></script>
</html>
