<?php 

include "backend/function_loggedin.php";



include "backend/evaluator_function_primary.php"; 
include "backend/primary_section_111_function.php";
include "backend/primary_section_112_function.php";

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

<form action="" method="POST">
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
    <td><input type="number"  autocomplete="off" name="Students_Total_2nd_Form" value="<?php echo $students_number_total; ?>" required ></td>
    <td><input type="number"  autocomplete="off" name="Students_Percentage_2nd_Form" value="<?php echo $students_percentage_total; ?>" required ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $markstudents; ?>" disabled ></td>
    <td><input type="text"  autocomplete="off" value="<?php echo $statusstudents; ?>"  disabled></td>
  </tr>
</table>
<center> <input class="form-submit-button "  type="submit" name = "submit_2nd_button" value="Submit"></center>
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
    <td>1.1.1.1</td> <?php $indicators = 4; ?>
    <td><input type="text" name="data1" autocomplete="off" value = " <?php echo $indicators; ?>" disabled /></td>
    <td><input type="text" name="data1" autocomplete="off" value = " <?php echo $indicators; ?>" disabled/></td>
    <td><input type="text" name="data1" autocomplete="off" value="<?php echo $total = $marks + $marks2 + $marks3 + $markstudents; ?>"  disabled /></td>
    <td><input type="text" name="data1" autocomplete="off" value = "<?php echo ($total /( $indicators * 6))*100;?>" disabled /></td>
  </tr>
</table>

<p> </p> 
<br> 
<br>
 <br> 
 <br>


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

<form action="fileupload.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
  <td>Select E-Signature to upload:</td>
  
  </tr>
  <tr>
    <td><input type="file" name="fileToUpload" id="fileToUpload"> </td>
    <td><input class="form-submit-button "type="submit" value="Upload Image" name="submit"></td>
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
