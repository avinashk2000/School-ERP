<?php
    session_start();
    include 'database-code/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'CssLink.php';
    ?>
</head>
<?php
$captcha = rand(9999, 1000);

?>

<body>
    <?php
    include 'includes/Header.php';
    ?>
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-sm-12">
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <div class="card mb-3" style="box-shadow: 0 1px 1px rgba(0, 0, 0, 0.11), 0 2px 2px rgba(0, 0, 0, 0.11), 0 4px 4px rgba(0, 0, 0, 0.11), 0 8px 8px rgba(0, 0, 0, 0.11), 0 16px 16px rgba(0, 0, 0, 0.11), 0 32px 32px rgba(0, 0, 0, 0.11);">
                                <div class="row g-0">
                                    <div class="col-sm-4" style="border-right:1px solid rgba(0, 0, 0, 0.11);">
                                        <img src="Images/admin.jpg" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Admin Login : <span class="text-danger" style="font-size:1rem; font-style:italic;">
                                            <?php
                                                if(isset($_SESSION['sms'])){
                                                    if($_SESSION['sms']===0){
                                                        ?>
                                                            Captcha is not matched
                                                        <?php
                                                        unset($_SESSION['sms']);
                                                    }else if($_SESSION['sms']===1){
                                                        ?>
                                                            User Id or Password is incorrect
                                                        <?php
                                                        unset($_SESSION['sms']);
                                                    }else if($_SESSION['sms']===2){
                                                        ?>
                                                            First Login Using UserId and Password
                                                        <?php
                                                        unset($_SESSION['sms']);
                                                    }
                                                }
                                            ?>
                                            </span></h5> 
                                            <hr />
                                            <form action="database-code/admin-login.php" method="post" class="p-5" id="login">
                                                <div class="form-outline mb-4">
                                                    <input type="email" name="email" id="form1Example1" class="form-control" required autocomplete="off" />
                                                    <label class="form-label" for="form1Example1">Email address</label>
                                                </div>
                                                <div class="form-outline mb-2">
                                                    <input type="password" id="pass" name="password" class="form-control" autocomplete="off" required/>
                                                    <label class="form-label" for="form1Example2">Password</label>
                                                </div>
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" onclick="Toggle()" type="checkbox" />
                                                    <label class="form-check-label" id="sms" for="sms">Show Password</label>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-sm-6">
                                                        <div class="form-outline mb-4">
                                                            <input type="text" id="form1Example2" class="form-control" name="captcha" maxlength="4" pattern="[0-9]*" required onkeyup="validate()"/>
                                                            <label class="form-label" for="form1Example2" id="error">Enter Captcha</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" name="captcha1" class="form-control captcha" value="<?= $captcha;?>" readonly/>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <a href="#!">Forgot password?</a>
                                                    </div>
                                                </div>
                                                <input type="submit" name="loginButton" class="btn btn-primary btn-log" value="Login" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    include 'Jslink.php';
    ?>
    <script type="text/javascript" src="JavaScript/main.js"></script>
</body>

</html>