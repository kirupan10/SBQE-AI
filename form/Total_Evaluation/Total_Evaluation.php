<?php 
    include "../backend/function_loggedin.php";
    include "../backend/config.php";
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

         

    

<table class="styled-table">
  <P> </P>
  <thead>
  <tr>
    <th></th>
    <th></th>
    <th>Total number of indicators</th>
    <th>Maximum marks obtained for all indicators</th>
    <th>Number of indicators which have been evaluated</th>
    <th>Maximum marks that can be obtained</th>
    <th>marks obtained</th>
    <th>Percentage</th>
    <th>Total evaluation</th>

  </tr>
</thead>
  <tr class="active-row" >
    <td>1</td>
    <td>Students’ achievement</td>
    <td> <?php echo $indication1 = 35; ?></td>
    <td><?php echo $Max_marks1 = 210; ?></td>
    <td><?php echo $indication_elavuated1 = 32; ?> </td>
    <td><?php echo $ob_marks1 = 192; ?></td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" required ></td>
    <td><?php  $n1 =(89/$ob_marks1)*100; echo substr($n1, 0, 2) ?></td>
    <td><?php echo  statuschecker($n1); ?></td>
  </tr>

    <tr class="active-row" >
    <td>2</td>
    <td>Learning, teaching and assessment</td>
    <td><?php echo $indication2 = 30; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" disabled ></td>
    <td><?php echo $n2 = 58; ?></td>
    <td><?php echo  statuschecker(58); ?></td>
  </tr>

    <tr class="active-row" >
    <td>3</td>
    <td>Formal curriculum management</td>
    <td><?php echo $indication3 = 25; ?></td>
    <td><?php echo $Max_marks3 = 150; ?></td>
    <td><?php echo $indication_elavuated3 = 23; ?></td>
    <td><?php echo $ob_marks3 = 138; ?></td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" required ></td>
    <td><?php  $n3 =(89/$ob_marks3)*100; echo substr($n3, 0, 2) ?></td>
    <td><?php echo  statuschecker($n3); ?></td>
  </tr>

    <tr class="active-row" >
    <td>4</td>
    <td> Co-curricular activities</td>
    <td><?php echo $indication4 = 14; ?></td>
    <td><?php echo $Max_marks4 = 84; ?></td>
    <td><?php echo $indication_elavuated4 = 14; ?></td>
    <td><?php echo $ob_marks4 = 84; ?></td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" required ></td>
    <td><?php  $n4 =(89/$ob_marks4)*100; echo substr($n4, 0, 2) ?></td>
    <td><?php echo  statuschecker($n4); ?></td>
  </tr>

    <tr class="active-row" >
    <td>5</td>
    <td> Student welfare</td>
    <td><?php echo $indication5 = 22; ?></td>
    <td><?php echo $Max_marks5 = 132; ?></td>
    <td><?php echo $indication_elavuated5 = 20; ?></td>
    <td><?php echo $ob_marks5 = 120; ?></td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" required ></td>
    <td><?php  $n5 =(89/$ob_marks5)*100; echo substr($n5, 0, 2) ?></td>
    <td><?php echo  statuschecker($n5); ?></td>
  </tr>

  <tr class="active-row" >
    <td>6</td>
    <td> Leadership and management</td>
    <td><?php echo $indication6 = 45; ?></td>
    <td><?php echo $Max_marks6 = 270; ?></td>
    <td><?php echo $indication_elavuated6 = 45; ?></td>
    <td><?php echo $ob_marks6 = 270; ?></td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" required ></td>
    <td><?php  $n6 =(89/$ob_marks6)*100; echo substr($n6, 0, 2) ?></td>
    <td><?php echo  statuschecker($n6); ?></td>
  </tr>

  <tr class="active-row" >
    <td>7</td>
    <td>Physical resource management</td>
    <td><?php echo $indication7 = 26; ?></td>
    <td><?php echo $Max_marks7 = 156; ?></td>
    <td><?php echo $indication_elavuated7 = 25; ?></td>
    <td><?php echo $ob_marks7 = 150; ?></td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" required ></td>
    <td><?php  $n7 =(89/$ob_marks7)*100; echo substr($n7, 0, 2) ?></td>
    <td><?php echo  statuschecker($n7); ?></td>
  </tr>

  <tr class="active-row" >
    <td>8</td>
    <td> School and community</td>
    <td><?php echo $indication8 = 13; ?></td>
    <td><?php echo $Max_marks8 = 78; ?></td>
    <td><?php echo $indication_elavuated8 = 12; ?></td>
    <td><?php echo $ob_marks8 = 72; ?></td>
    <td><input type="number"  autocomplete="off" name="marks1" value="<?php echo $marks1; ?>" required ></td>
    <td><?php  $n8 =(89/$ob_marks8)*100; echo substr($n8, 0, 2) ?></td>
    <td><?php echo  statuschecker($n8); ?></td>
  </tr>

  <tr class="active-row" >
    <td></td>
    <td>Total</td>
    <td><?php echo $indication1 + $indication2 + $indication3 + $indication4 + $indication5 + $indication6 + $indication7 + $indication8; ?></td>
    <td><?php echo $Max_marks1 + $Max_marks3 + $Max_marks4 + $Max_marks5 + $Max_marks6 + $Max_marks7 + $Max_marks8; ?></td>
    <td><?php echo $indication_elavuated1 + $indication_elavuated3 + $indication_elavuated4 + $indication_elavuated5 + $indication_elavuated6 + $indication_elavuated7 + $indication_elavuated8; ?></td>
    <td><?php echo $ob_marks1 + $ob_marks3 + $ob_marks4 + $ob_marks5 + $ob_marks6 + $ob_marks7 + $ob_marks8; ?></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

  <tr class="active-row" >
    <td></td>
    <td>School Quality Index</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><?php  $n_total = ($n1 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + 56)/8;  echo substr($n_total, 0,2);?></td>
    

     <?php function statuschecker($n_total){

     if ($n_total > 0 && $n_total < 25 ) {
            
            $status_1 = "Immediate development required";
            
        }

        if ($n_total >= 25 && $n_total < 45 ) {
            
            $status_1 = "Development Required";
            
        }

        if ($n_total >= 45 && $n_total < 60 ) {
            
            $status_1 = "Satisfactory";
            
        }

        if ($n_total >= 60 && $n_total < 75 ) {
            
            $status_1 = "Good";
            
        }

        if ( $n_total >= 75 && $n_total < 90 ) {
           
            $status_1 = "Very Good";
            
        }

         if ( $n_total >= 90 ) {
            
            $status_1 = "Excellent";
            
        }
        return $status_1;

}





    ?>
    <td> <?php echo statuschecker($n_total); ?> </td>
  </tr>
</table>
<center> <input class="form-submit-button "  type="submit"  id="submit_primary_section" name="submit" placeholder='Sumbit' onclick="register(event)">
</center>
</form>
                


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