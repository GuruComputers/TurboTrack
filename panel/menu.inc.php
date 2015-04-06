<?php

if(basename(__FILE__) == basename($_SERVER['PHP_SELF'])){exit();}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>TurboTrack Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TurboTrack</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li <?php if ($page == 'home') { echo 'class="active"'; }?> ><a href="index.php">Personal Overview <span class="sr-only">(current)</span></a></li>
            <li <?php if ($page == 'company') { echo 'class="active"'; }?> ><a href="company.php">Company Overview</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Jobs</a></li>
            <li><a href="">Speeding Fines</a></li>
            <li><a href="">Damage Reports</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Trophies</a></li>
            <li><a href="">Awards</a></li>
            <li><a href='steamauth/logout.php'>Log out</a></li>
          </ul>
          <?php 
            if($rank != 'Trucker')
            {
              echo '<ul class="nav nav-sidebar">
            <li><a href="">Approve Jobs</a></li>
            <li><a href="">Check Accident Reports</a></li>
            <li><a href="">Warn Player</a></li>
            <li><a href="">Ban Player</a></li>
          </ul>';
            }
          ?>
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <h4 class="text-center">User Profile<span class="glyphicon glyphicon-user pull-right"></span></h4>
              </div>
              <div class="panel-body text-center">
                  <p class="lead">
                    <?php echo '<img src="'.$avatar.'" /><br>'; ?>
                    <strong><?php echo $personaname; ?></strong>
                  </p>
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item liitem"><strong>Position:</strong>
                      <span class="pull-right"><?php echo $rank; ?></span>
                  </li>
              </ul>
              <div class="panel-footer">
                  <div class="row">
                      <div class="col-xs-4 col-sm-3 col-md-4 col-lg-2">
                      </div>
                      <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4" id="qr1">
                      </div>
                      <div class="col-xs-6 col-sm-5 col-md-4 col-lg-6">
                      </div>
                  </div>
              </div>
          </div>
        </div>