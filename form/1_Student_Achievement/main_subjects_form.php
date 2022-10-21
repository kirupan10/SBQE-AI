<?php 


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
                <h4><b>Sujject Name + Activity Number</b></h4>
            </div>


<form action="" method="POST">
<table class="styled-table">
  <P> 1.2.2 Progress of term test marks</P>
  <thead>
  <tr>
    
    <th colspan="6" >Percentage of students who 
obtained above 40 marks </th>
    <th rowspan="2">Percentage</th>
    <th rowspan="2">Marks</th>
    <th rowspan="2">Status</th>
  </tr>
</thead>

<thead>
  <tr>
    
    
    <th> 6</th>
    <th> 7</th>
    <th> 8</th>
    <th> 9</th>
    <th> 10</th>
    <th> 11</th>
    <th colspan="3"> </th>
    
    
  </tr>
</thead>

  <tr class="active-row">
    
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1111" value="<?php echo $totalNumbersOfTheStudents; ?>" required></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1111" value="<?php echo $totalNumbersOfTheStudents; ?>" required></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1111" value="<?php echo $totalNumbersOfTheStudents; ?>" required></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1111" value="<?php echo $totalNumbersOfTheStudents; ?>" required></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1111" value="<?php echo $totalNumbersOfTheStudents; ?>" required></td>
    <td><input type="number"  autocomplete="off" name="totalNumbersOfTheStudents1111" value="<?php echo $totalNumbersOfTheStudents; ?>" required></td>
    <td><input type="text"  autocomplete="off" disabled value="<?php echo $marks; ?>"></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
    <td><input type="text"  autocomplete="off"disabled value="<?php echo $status; ?> "></td>
  </tr>
  
  
</table>
<center> <input class="form-submit-button "  type="submit"  id="submit_primary_section" name="submit_primary_section" placeholder='Sumbit' onclick="register(event)">
</center>
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
