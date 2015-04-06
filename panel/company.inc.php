<?php

if(basename(__FILE__) == basename($_SERVER['PHP_SELF'])){exit();}
$page = "company";
include("menu.inc.php");

?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Company Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Jobs Performed</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Mileage</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Accidents</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Jobs on Time</h4>
            </div>
          </div>

          <h2 class="sub-header">Company Leaderboard</h2>
          <div class="table-responsive">
            <table class="table table-striped text-center">
              <thead>
                <tr>
                  <th class="text-center">Steam ID</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Miles Travelled</th>
                  <th class="text-center">Jobs Completed</th>
                  <th class="text-center">Credits Earnt</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php include('mileage.php'); ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
