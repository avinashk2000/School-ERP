<?php
session_start();
include '../database-code/connection.php';
if (isset($_SESSION['sms']) && isset($_SESSION['name'])) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>School ERP : Admin Dashboard</title>
    <link rel="icon" href="images/school.png" />
    <?php
    include 'csslink.php';
    ?>
    <style>
      @media (min-width: 1400px) {

        main,
        header,
        #main-navbar {
          padding-left: 240px;
        }
      }
    </style>
  </head>

  <body>
    <header>
      <?php
      include 'includes/sidebar.php';
      include 'includes/header.php';
      ?>
    </header>
    <main style="margin-top: 6rem">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 mb-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="card text-light" style="box-shadow:-2px -2px 4px 4px rgba(0,0,0,0.45); background: #3A1C71 !important;background: -webkit-linear-gradient(to left, #FFAF7B, #D76D77, #3A1C71) !important;background: linear-gradient(to left, #FFAF7B, #D76D77, #3A1C71) !important;">
                  <h5 class="card-header">Teachers</h5>
                  <div class="card-body">
                    <h5 class="card-title">Active Teachers : 50</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="card bg-warning text-light" style="box-shadow:-2px -2px 4px 4px rgba(0,0,0,0.45); background: #007991; background: -webkit-linear-gradient(to left, #007991, #78ffd6); background: linear-gradient(to left, #007991, #78ffd6);">
                  <h5 class="card-header">Students</h5>
                  <div class="card-body">
                    <h5 class="card-title">Active Students : 500</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="card bg-secondary text-light" style="box-shadow:-2px -2px 4px 4px rgba(0,0,0,0.45); background: #3A1C71 !important;background: -webkit-linear-gradient(to left, #FFAF7B, #D76D77, #3A1C71) !important;background: linear-gradient(to left, #FFAF7B, #D76D77, #3A1C71) !important;">
                  <h5 class="card-header">Paid Salary</h5>
                  <div class="card-body">
                    <h5 class="card-title">Salary : 100000</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="card bg-secondary text-light" style="box-shadow:-2px -2px 4px 4px rgba(0,0,0,0.45); background: #3A1C71 !important;background: -webkit-linear-gradient(to left, #FFAF7B, #D76D77, #3A1C71) !important;background: linear-gradient(to left, #FFAF7B, #D76D77, #3A1C71) !important;">
                  <h5 class="card-header">Received Fees</h5>
                  <div class="card-body">
                    <h5 class="card-title">Fee : 1200000</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </main>
    <footer></footer>
    <?php
    include 'jslink.php';
    ?>
    <script type="text/javascript">
      const sidenav = document.getElementById("sidenav-1");
      const instance = mdb.Sidenav.getInstance(sidenav);

      let innerWidth = null;

      const setMode = (e) => {
        if (window.innerWidth === innerWidth) {
          return;
        }

        innerWidth = window.innerWidth;

        if (window.innerWidth < 1400) {
          instance.changeMode("over");
          instance.hide();
        } else {
          instance.changeMode("side");
          instance.show();
        }
      };

      setMode();

      // Event listeners
      window.addEventListener("resize", setMode);
    </script>
  </body>

  </html>
<?php
} else {
  $_SESSION['sms'] = 2;
  header("Location:../admin-login");
}
?>