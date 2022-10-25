<?php include "../backend/function_loggedin.php";
    include "../backend/config.php";

if(isset($_SESSION['primary']) && !empty($_SESSION['primary'])) {
  
}else{ header("location: ../../primary_section_form.php");} //primary section form

if(isset($_SESSION['secondary']) && !empty($_SESSION['secondary'])) {
  
}else{ header("location: ../1_Student_Achievement/secondary_form_1_2_1.php");} //secondary section form

if(isset($_SESSION['learrning']) && !empty($_SESSION['learrning'])) {
  
}else{ header("location: ../2_Learning_Teaching_and_Assessment/Planning_2.4.php");} // form 2 

if(isset($_SESSION['formal3']) && !empty($_SESSION['formal3'])) {
  
}else{ header("location: ../3_Formal_Curriculum_Management/formal3.8.php");} // form 3

if(isset($_SESSION['curricular']) && !empty($_SESSION['curricular'])) {
  
}else{ header("location: ../4_Co_curricular_Activities/curricular_4.5.php");} //form 4

if(isset($_SESSION['walfare5']) && !empty($_SESSION['walfare5'])) {
  
}else{ header("location: ../5_Student_Welfare/walfare5.9.php");} //form 5

if(isset($_SESSION['leadership6']) && !empty($_SESSION['leadership6'])) {
  
}else{ header("location: ../6_Leadership_and_Management/leadership6.9.php");} //form 6

if(isset($_SESSION['physical']) && !empty($_SESSION['physical'])) {
  
}else{ header("location: ../7_Physical_Resource_Management/physical.7.8.php");} //form 7

if(isset($_SESSION['school8']) && !empty($_SESSION['school8'])) {
  
}else{ header("location: ../8_School_and_Community/school.8.5.php");} // form 8



$indication1 = 35; $Max_marks1 = 210; $indication_elavuated1 = 32; $ob_marks1 =  192; $n8 = 10; $status8 = "ok";
$indication2 = 30; $Max_marks2 = 210; $indication_elavuated2 = 32; $ob_marks2 = 192; $n1 = 10; $status1 = "ok";

$indication3 = 25; $Max_marks3 = 150; $indication_elavuated3 = 23; $ob_marks3 = 138; $n2 = 10; $status2 = "ok";
$indication4 = 14; $Max_marks4 = 84; $indication_elavuated4 = 14; $ob_marks4 = 84; $n3 = 10; $status3 = "ok";
$indication5 = 22; $Max_marks5 = 132; $indication_elavuated5 = 20; $ob_marks5 = 120; $n4= 10; $status4= "ok";
$indication6 = 45; $Max_marks6 = 270; $indication_elavuated6 = 45; $ob_marks6 = 270; $n5 = 10; $status5= "ok";
$indication7 = 26; $Max_marks7 = 156; $indication_elavuated7 = 25; $ob_marks7 = 150; $n6 = 10; $status6= "ok";
$indication8 = 13; $Max_marks8 = 78; $indication_elavuated8 = 12; $ob_marks8 = 72; $n7 = 10; $status7= "ok";




    if(isset($_POST['submit'])){
        
        $data1 = mysqli_real_escape_string($con,$_POST['marks1']);
        $data2 = 60;
        $data3 = mysqli_real_escape_string($con,$_POST['marks3']);
        $data4 = mysqli_real_escape_string($con,$_POST['marks4']);

        $data5 = mysqli_real_escape_string($con,$_POST['marks5']);
        $data6 = mysqli_real_escape_string($con,$_POST['marks6']);
        $data7 = mysqli_real_escape_string($con,$_POST['marks7']);
        $data8 = mysqli_real_escape_string($con,$_POST['marks8']);

        if ($data1 != "" && $data2 != "" && $data3 != "" && $data4 != "" && $data5 != "" && $data6 != "" && $data7 != "" && $data8 != ""  ){

            $sql_insert_datarow_1 = "INSERT INTO total_evaluation (
                School_ID,
                Total_Indicators,
                Max_Obtained,
                Evaluated_Indicators,
                Max_Marks,
                Percentage,
                Status,
                form) 
            VALUE (
                '{$_SESSION['school_id']}',
                $indication1,
                $Max_marks1,
                $indication_elavuated1,
                $data1,
                $n1,
                '$status1',
                1)";

            $sql_insert_datarow_2 = "INSERT INTO total_evaluation (School_ID,Total_Indicators,Max_Obtained,Evaluated_Indicators,Max_Marks,Percentage,Status,form) 
            VALUE ('{$_SESSION['school_id']}',$indication2,$Max_marks2,$indication_elavuated2,$data2,$n2,'$status2',2)";

            $sql_insert_datarow_3 = "INSERT INTO total_evaluation (School_ID,Total_Indicators,Max_Obtained,Evaluated_Indicators,Max_Marks,Percentage,Status,form) 
            VALUE ('{$_SESSION['school_id']}',$indication3,$Max_marks3,$indication_elavuated3,$data3,$n3,'$status3',3)";

            $sql_insert_datarow_4 = "INSERT INTO total_evaluation (School_ID,Total_Indicators,Max_Obtained,Evaluated_Indicators,Max_Marks,Percentage,Status,form) 
            VALUE ('{$_SESSION['school_id']}',$indication4,$Max_marks4,$indication_elavuated4,$data4,$n4,'$status4',4)";

            $sql_insert_datarow_5 = "INSERT INTO total_evaluation (School_ID,Total_Indicators,Max_Obtained,Evaluated_Indicators,Max_Marks,Percentage,Status,form) 
            VALUE ('{$_SESSION['school_id']}',$indication5,$Max_marks5,$indication_elavuated5,$data5,$n5,'$status5',5)";

            $sql_insert_datarow_6 = "INSERT INTO total_evaluation (School_ID,Total_Indicators,Max_Obtained,Evaluated_Indicators,Max_Marks,Percentage,Status,form) 
            VALUE ('{$_SESSION['school_id']}',$indication6,$Max_marks6,$indication_elavuated6,$data6,$n6,'$status6',6)";

            $sql_insert_datarow_7 = "INSERT INTO total_evaluation (School_ID,Total_Indicators,Max_Obtained,Evaluated_Indicators,Max_Marks,Percentage,Status,form) 
            VALUE ('{$_SESSION['school_id']}',$indication7,$Max_marks7,$indication_elavuated7,$data7,$n7,'$status7',7)";

            $sql_insert_datarow_8 = "INSERT INTO total_evaluation (School_ID,Total_Indicators,Max_Obtained,Evaluated_Indicators,Max_Marks,Percentage,Status,form ) 
            VALUE ('{$_SESSION['school_id']}',$indication8,$Max_marks8,$indication_elavuated8,$data8,$n8,'$status8',8)";

            $result_1 = mysqli_query($con,$sql_insert_datarow_1);
            $result_2 = mysqli_query($con,$sql_insert_datarow_2);
            $result_3 = mysqli_query($con,$sql_insert_datarow_3);
            $result_4 = mysqli_query($con,$sql_insert_datarow_4);

            $result_5 = mysqli_query($con,$sql_insert_datarow_5);
            $result_6 = mysqli_query($con,$sql_insert_datarow_6);
            $result_7 = mysqli_query($con,$sql_insert_datarow_7);
            $result_8 = mysqli_query($con,$sql_insert_datarow_8);

            if($result_1 && $result_2 && $result_3 && $result_4 && $result_5 && $result_6 && $result_7 && $result_8 ){ }else{
            echo("Error description: " . mysqli_error($con));}

        

    }

}

$marks1 = "";
$sql = "SELECT  Max_Marks FROM  total_evaluation WHERE form =1 && School_ID ='{$_SESSION['school_id']}' order by Total_Evaluation  desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks1 = $row["Max_Marks"];  } // The value we usually set is the primary 

}


$marks2 = "";
$sql = "SELECT  Max_Marks FROM  total_evaluation WHERE form =2 && School_ID ='{$_SESSION['school_id']}' order by Total_Evaluation  desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks2 = $row["Max_Marks"];  } // The value we usually set is the primary 

}

$marks3 = "";
$sql = "SELECT  Max_Marks FROM  total_evaluation WHERE form = 3 && School_ID ='{$_SESSION['school_id']}' order by Total_Evaluation  desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks3 = $row["Max_Marks"];  } // The value we usually set is the primary 

}

$marks4 = "";
$sql = "SELECT  Max_Marks FROM  total_evaluation WHERE form = 4 && School_ID ='{$_SESSION['school_id']}' order by Total_Evaluation  desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks4 = $row["Max_Marks"];  } // The value we usually set is the primary 

}

$marks5 = "";
$sql = "SELECT  Max_Marks FROM  total_evaluation WHERE form = 5 && School_ID ='{$_SESSION['school_id']}' order by Total_Evaluation  desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks5 = $row["Max_Marks"];  } // The value we usually set is the primary 

}

$marks6 = "";
$sql = "SELECT  Max_Marks FROM  total_evaluation WHERE form = 6 && School_ID ='{$_SESSION['school_id']}' order by Total_Evaluation  desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks6 = $row["Max_Marks"];  } // The value we usually set is the primary 

}

$marks7 = "";
$sql = "SELECT  Max_Marks FROM  total_evaluation WHERE form = 7 && School_ID ='{$_SESSION['school_id']}' order by Total_Evaluation  desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks7 = $row["Max_Marks"];  } // The value we usually set is the primary 

}

$marks8 = "";
$sql = "SELECT  Max_Marks FROM  total_evaluation WHERE form = 8 && School_ID ='{$_SESSION['school_id']}' order by Total_Evaluation  desc LIMIT 1 ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        
         $marks8 = $row["Max_Marks"];  } // The value we usually set is the primary 

}

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

         

    
<form action="" method="POST">
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
    <td><?php  $n1 =($marks1/$ob_marks1)*100; echo substr($n1, 0, 4) ?></td>
    <td><?php echo $status1 =  statuschecker($n1); ?></td>
  </tr>

    <tr class="active-row" >
    <td>2</td>
    <td>Learning, teaching and assessment</td>
    <td><?php echo $indication2 = 30; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td><input type="number"  autocomplete="off" name="marks2" value="<?php echo $marks2; ?>" disabled ></td>
    <td><?php echo $n2 = 58; ?></td>
    <td><?php echo $status2 =  statuschecker(58); ?></td>
  </tr>

    <tr class="active-row" >
    <td>3</td>
    <td>Formal curriculum management</td>
    <td><?php echo $indication3 = 25; ?></td>
    <td><?php echo $Max_marks3 = 150; ?></td>
    <td><?php echo $indication_elavuated3 = 23; ?></td>
    <td><?php echo $ob_marks3 = 138; ?></td>
    <td><input type="number"  autocomplete="off" name="marks3" value="<?php echo $marks3; ?>" required ></td>
    <td><?php  $n3 =($marks3/$ob_marks3)*100; echo substr($n3, 0, 4) ?></td>
    <td><?php echo $status3 =  statuschecker($n3); ?></td>
  </tr>

    <tr class="active-row" >
    <td>4</td>
    <td> Co-curricular activities</td>
    <td><?php echo $indication4 = 14; ?></td>
    <td><?php echo $Max_marks4 = 84; ?></td>
    <td><?php echo $indication_elavuated4 = 14; ?></td>
    <td><?php echo $ob_marks4 = 84; ?></td>
    <td><input type="number"  autocomplete="off" name="marks4" value="<?php echo $marks4; ?>" required ></td>
    <td><?php  $n4 =($marks4/$ob_marks4)*100; echo substr($n4, 0, 4) ?></td>
    <td><?php echo $status4 =  statuschecker($n4); ?></td>
  </tr>

    <tr class="active-row" >
    <td>5</td>
    <td> Student welfare</td>
    <td><?php echo $indication5 = 22; ?></td>
    <td><?php echo $Max_marks5 = 132; ?></td>
    <td><?php echo $indication_elavuated5 = 20; ?></td>
    <td><?php echo $ob_marks5 = 120; ?></td>
    <td><input type="number"  autocomplete="off" name="marks5" value="<?php echo $marks5; ?>" required ></td>
    <td><?php  $n5 =($marks5/$ob_marks5)*100; echo substr($n5, 0, 4) ?></td>
    <td><?php echo $status5 =  statuschecker($n5); ?></td>
  </tr>

  <tr class="active-row" >
    <td>6</td>
    <td> Leadership and management</td>
    <td><?php echo $indication6 = 45; ?></td>
    <td><?php echo $Max_marks6 = 270; ?></td>
    <td><?php echo $indication_elavuated6 = 45; ?></td>
    <td><?php echo $ob_marks6 = 270; ?></td>
    <td><input type="number"  autocomplete="off" name="marks6" value="<?php echo $marks6; ?>" required ></td>
    <td><?php  $n6 =($marks6/$ob_marks6)*100; echo substr($n6, 0, 4) ?></td>
    <td><?php echo $status6 =  statuschecker($n6); ?></td>
  </tr>

  <tr class="active-row" >
    <td>7</td>
    <td>Physical resource management</td>
    <td><?php echo $indication7 = 26; ?></td>
    <td><?php echo $Max_marks7 = 156; ?></td>
    <td><?php echo $indication_elavuated7 = 25; ?></td>
    <td><?php echo $ob_marks7 = 150; ?></td>
    <td><input type="number"  autocomplete="off" name="marks7" value="<?php echo $marks7; ?>" required ></td>
    <td><?php  $n7 =($marks7/$ob_marks7)*100; echo substr($n7, 0, 4) ?></td>
    <td><?php echo $status7 =  statuschecker($n7); ?></td>
  </tr>

  <tr class="active-row" >
    <td>8</td>
    <td> School and community</td>
    <td><?php echo $indication8 = 13; ?></td>
    <td><?php echo $Max_marks8 = 78; ?></td>
    <td><?php echo $indication_elavuated8 = 12; ?></td>
    <td><?php echo $ob_marks8 = 72; ?></td>
    <td><input type="number"  autocomplete="off" name="marks8" value="<?php echo $marks8; ?>" required ></td>
    <td><?php  $n8 =($marks8/$ob_marks8)*100; echo substr($n8, 0, 4) ?></td>
    <td><?php echo $status8 =  statuschecker($n8); ?></td>
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