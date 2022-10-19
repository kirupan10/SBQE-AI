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
  <P> 1.2.4. Analyzing the achievement level</P>
  <thead>
  <tr>
    <th>Criteria</th>
    <th colspan="2">Indicators</th>
    <th>Marks</th>
    <th>Status</th>
  </tr>
</thead>
  <tr class="active-row">
    <td rowspan="3">Analyzing the achievement level according to the school based assessment programme and maintaining records.</td>
    <td>1.2.4.1</td>
    <th>SBA for grade 6-9
Preparation of plan, implementing, maintaining 
records, analyzing the record of marks and implementing 
feedback programmes based on the findings.</th>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
  </tr>

  <tr class="active-row">
    <td>1.2.4.2</td>
    <th>SBA for grade 10-11
Preparation of plan, implementing, maintaining 
records, analyzing the record of marks and implementing 
feedback programmes based on the findings.</th>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
  </tr>

  <tr class="active-row">
    <td>1.2.4.3</td>
    <th>SBA for grade 12-13
Preparation of plan, implementing,maintaining 
records, analyzing the record of marks and 
implementing feedback programmes based on the 
findings.</th>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
  </tr>

  <tr class="active-row">
    <td rowspan="4">Analyzing the 
achievement level 
according to term test 
marks and maintaining 
records.</td>
    <td>1.2.4.4</td>
    <th>Term test marks of all the classes are entered in the Marks 
register and certified by the Principal.</th>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
  </tr>

  <tr class="active-row">
    <td>1.2.4.5</td>
    <th>Feedback programmes and projects are planned and 
implemented based on the findings of the analysis of term 
test marks of Grades 6-9.</th>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
  </tr>

  <tr class="active-row">
    <td>1.2.4.6</td>
    <th>Feedback programmes and projects have been planned 
and implemented based on the findings of the analysis of 
term test marks of Grades 10-11.</th>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
  </tr>

  <tr class="active-row">
    <td>1.2.4.7</td>
    <th>Feedback programmes and projects have been planned 
and implemented based on the findings of the analysis of 
term test marks of Grades 12-13.</th>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
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
