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
        <div class="row mb-2 mt-2">
            <div class="col-sm-12 mt-5 mb-5">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-sm-3 mb-3">
                            <a href="admin-login">
                                <div class="card log-card" style=" box-shadow:-2px -2px 9px 8px rgba(0,0,0,0.11);">
                                    <img class="card-img-top" alt="avatar2" src="Images/admin.jpg" />
                                    <div class="card-body">
                                        <h3 class="text-center text-dark">Admin</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <a href="principle-login">
                                <div class="card log-card" style=" box-shadow:-2px -2px 9px 8px rgba(0,0,0,0.11);">
                                    <img class="card-img-top" alt="avatar2" src="Images/teacher.png" />
                                    <div class="card-body">
                                        <h3 class="text-center text-dark">Principle</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <a href="teacher-login">
                                <div class="card log-card" style=" box-shadow:-2px -2px 9px 8px rgba(0,0,0,0.11);">
                                    <img class="card-img-top" alt="avatar2" src="Images/teachers.png" />
                                    <div class="card-body">
                                        <h3 class="text-center text-dark">Teacher</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <a href="parents-login">
                                <div class="card log-card" style=" box-shadow:-2px -2px 9px 8px rgba(0,0,0,0.11);">
                                    <img class="card-img-top" alt="avatar2" src="Images/parents.png" />
                                    <div class="card-body">
                                        <h3 class="text-center text-dark">Parents</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    include 'Jslink.php';
    ?>
</body>

</html>