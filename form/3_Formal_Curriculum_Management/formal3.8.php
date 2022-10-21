<?php 


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
    <link rel="icon" type="../.././image/png" href="../.././assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SBQE & AI - Form</title>

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


<form action="" method="POST">
<table class="styled-table">
  <P> Percentage of students who obtained above 40 marks for each of the following subjects (Grade 12-13) 
Table – 1.2.2.2</P>
  <thead>
  <tr>
    <th ></th>
    <th>Indicator</th>
    <th> Marks</th>
  </tr>
</thead>

  <tr class="active-row" >
    <td>3.8.1</td>
    <td>  Planning and implementation of projects for developing 
student competencies and maintaining proper record</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>

    <tr class="active-row" >
    <td>3.8.2</td>
    <td> Organizing projects involving all the students from grade 6 
to 11, guiding them and monitoring</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>

  <tr class="active-row" >
    <td>3.8.3</td>
    <td>  Getting the GCE Advanced level students involved in 
doing various projects and the monitoring is done by teachers</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>

  <tr class="active-row" >
    <td>3.8.4</td>
    <td> Implementation of different programmes based on the 
current requirements ( English as a life skill programme , General 
ICT…)</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>

      <tr class="active-row" >
    <td></td>
    <td>Total Marks for the criterion</td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1113" value="<?php echo $totalNumbersOfTheStudents3; ?>" required ></td>
    
  </tr>


  
</table>
<center> <input class="form-submit-button "  type="submit"  id="submit_primary_section" name="submit_primary_section" placeholder='Sumbit' onclick="register(event)">
</center>
</form>

    

<form action="" method="POST">
<table class="styled-table">
  <p></p>
  <thead>
  <tr>
    <th ></th>
    <th>Number of indicators 
evaluated</th>
    <th> Maximum marks that can be obtained 
according to the evaluated indicators</th>
    <th> Total marks 
obtained</th>
    <th> Percentage</th>
  </tr>
</thead>

  <tr class="active-row" >
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
