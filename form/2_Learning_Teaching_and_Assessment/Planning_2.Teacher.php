<?php /* include "config.php";
$t=time();
$t . "<br>";
//echo(date("Y-m-d",$t));

$date = date("Y-m-d",$t);
//echo "<br>". $date;

if(isset($_POST['evaluator_submit'])){

    $evaluator_name = mysqli_real_escape_string($con,$_POST['evaluator_name']);
    $date = mysqli_real_escape_string($con,$_POST['date']);


if ( $evaluator_name != "" && $date != ""  ){


        $sql_evaluator = "INSERT INTO evaluator (
            email,
            School_ID,
            Name,
            UserInputName,
            Section,
            Time_submit) 
        VALUE 
        ('{$_SESSION['email']}',
            '{$_SESSION['school_id']}',
            '{$_SESSION['username']}',
            '$evaluator_name',
            'Primary Section 111',
            '$date')";

        $result_evaluator = mysqli_query($con,$sql_evaluator);

if($result_evaluator){
            
            header('Location: index.php');
        }else{
            echo("Error description: " . mysqli_error($con));
        }

        

    }

}


$evaluator_name_value = "";
$evaluator_date = "";

$sql = "SELECT UserInputName, Time_submit  FROM evaluator WHERE email ='{$_SESSION['email']}' && School_ID ='{$_SESSION['school_id']}' 
 LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $evaluator_name_value = $row["UserInputName"];   // The value we usually set is the primary key
         $evaluator_date = $row["Time_submit"]; }// The value we usually set is the primary key
        echo("Hello world ".$evaluator_name_value. " " . $evaluator_date);
         
       } else { echo "error"; } // While loop must be terminated 




*/

?>




<!doctype html>
<html lang="en">
<head>



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
  <P> In awarding marks for the indicators relevant to the criterion regarding individual responsibilities and personality, 
it is possible to discuss with the principal and the management committee and to check the relevant documents.</P>
  <thead>
  <tr>
    <th></th>
    <th>Teacher 1</th>
    <th>Teacher 2</th>
    <th>Teacher 3</th>
    <th>Teacher 4</th>
    
  </tr>
</thead>

  <tr class="active-row" >
    
    <td>Number of indicators evaluated</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>

  <tr class="active-row" >
    <td>Total marks that can be obtained for the evaluated indicators</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>

  <tr class="active-row" >
    <td>Marks obtained</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>

  <tr class="active-row" >
    <td>Percentage of marks</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>
  
</table>
<center> <input class="form-submit-button "  type="submit"  id="submit_primary_section" name="submit_primary_section" placeholder='Sumbit' onclick="register(event)">
</center>
</form>

    
<form action="" method="POST">
<table class="styled-table">
  <P> User conformination</P>
  
  <tr>
        <td></td>
  </tr>
  
  <tr>
    <td></td>
    <td>Name of the evaluator</td>
    <td><input type="text"  autocomplete="off" name="evaluator_name" value="<?php echo $evaluator_name_value; ?>" required ></td>
    <td></td>
  </tr>

  <tr class="active-row" >
    <td></td>
    <td>Date</td>
    <td><input type="date" name="date" value="<?php echo $evaluator_date; ?>" required /></td>
    <td></td>
    
  </tr>
  <tr class="active-row" >
    <td> </td>
    
    <td><center><input class="form-submit-button " type="submit" value="Final - Submit" name="evaluator_submit"/></td></center>

  </tr>
</table>

</form>


                
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
