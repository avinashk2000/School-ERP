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
        include 'csslink.php'
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
                <div class="row p-3">
                    <div class="card" style="box-shadow:-1px -1px 3px 3px rgba(0,0,0,0.30);">
                        <div class="card-header d-flex justify-content-between mb-3">
                            <span style="font-size: 1.2rem; font-weight:bold;">Assign Role to Teachers</span>
                            <a href="teachers" class="btn btn-primary btn-sm"> <i class="fas fa-caret-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="code/register-teacher.php" method="post" enctype="multipart/form-data">
                                <div class="row ">
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example2">Teacher Email</label>
                                        <select name="email" id="email-select" class="form-control">
                                            <option hidden>Select Teacher Email</option>
                                            <?php
                                                $sel1="SELECT t_email FROM teachers";
                                                $query1=mysqli_query($con,$sel1);
                                                while($data=mysqli_fetch_assoc($query1)){
                                                    ?>
                                                        <option value="<?= $data['t_email'];?>"><?= $data['t_email'];?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example2">Teacher Email</label> : <span id="erre"></span>
                                        <select class="form-control" name="name" id="name-select">

                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example2">Teacher Mobile No</label> : <span id="erm"></span>
                                        <input type="text" maxlength="10" name="mobile" required id="mobile" class="form-control" onkeyup="validemobile()" />
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary mb-4" name="register" value="Register Teacher">
                            </form>
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
            window.addEventListener("resize", setMode);
            $("#email-select").on('click',function(){
                jQuery.ajax({
                    url:'assign-role.php',
                    type:'POST',
                    data:({val: +$(this).val()}),
                    success: function(data){
                        jQuery.each(JSON.parse(data),function(key,datavalue){
                            jQuery("#name-select").append(
                                jQuery('<option>',{value:datavalue}).text(datavalue)
                            );
                        })
                    }
                })
            })
        </script>
    </body>

    </html>
<?php
} else {
    $_SESSION['sms'] = 2;
    header("Location:../admin-login");
}
?>