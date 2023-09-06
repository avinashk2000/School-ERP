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
                                        <img src="Images/parents.png" alt="Trendy Pants and Shoes" class="img-fluid rounded-start mt-5 mb-2" />
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">Parent Login</h5>
                                            <hr />
                                            <form action="" method="post" class="p-5">
                                                <div class="form-outline mb-4">
                                                    <input type="email" id="form1Example1" class="form-control" />
                                                    <label class="form-label" for="form1Example1">User Id</label>
                                                </div>
                                                <div class="form-outline mb-2">
                                                    <input type="password" id="pass" name="password" class="form-control" />
                                                    <label class="form-label" for="form1Example2">Password</label>
                                                </div>
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" onclick="Toggle()" type="checkbox" />
                                                    <label class="form-check-label" id="sms" for="sms">Show Password</label>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-sm-6">
                                                        <div class="form-outline mb-4">
                                                            <input type="text" id="form1Example2" class="form-control" />
                                                            <label class="form-label" for="form1Example2">Enter Captcha</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p style="text-decoration:line-through; font-style:italic; font-weight:bold;box-shadow:0 2px 3px 4px rgba(0, 0, 0, 0.11); width:20vh; padding:0.3rem 2rem 0.3rem 2rem;">djgfjds</p>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <a href="#!">Forgot password?</a>
                                                    </div>
                                                </div>
                                                <input type="submit" class="btn btn-primary btn-log" value="Login" />
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