<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title></title>

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
                <h2>School Based Quality Education & Assessment Indicators</h2>
            </div>

         

    <div id="labels-badges">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tim-title">
                    <h3> School : <?php echo "School Name"; ?></h3>
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

                <div class="tim-title">
                    <h3>Dropdown</h3>
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
                                  <a class="navbar-brand" href="#">Dropdown Colors</a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav pull-right">
<!--                                       default dropdown -->
                                    <li class="dropdown">
                                      <buttonn href="#" class="dropdown-toggle btn" data-toggle="dropdown">Default <b class="caret"></b></button>
<!--                                  You can add classes for different colours on the next element -->
                                      <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header">Dropdown header</li>
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                              </div><!-- /.container-fluid -->
                            </nav>

                        </div><!--  end navbar -->
                

            <div id="inputs">
                <div class="tim-title">
                    <h3>Inputs</h3>
                </div>

                 <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>   Number </label>
                            <input type="text" value="" placeholder="Number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>   Number </label>
                            <input type="text" value="" placeholder="Number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>   Number </label>
                            <input type="text" value="" placeholder="Number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>   Number </label>
                            <input type="text" value="" placeholder="Number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>   Number </label>
                            <input type="text" value="" placeholder="Number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>   Number </label>
                            <input type="text" value="" placeholder="Number" class="form-control" />
                        </div>
                    </div>
                  </div> <!-- end row -->

            </div><!--  end inputs -->

            <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <center> <button href="#fakelink" class="btn btn-danger btn-lg">Download</button> </center>
                        </div>
                    </div>

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
