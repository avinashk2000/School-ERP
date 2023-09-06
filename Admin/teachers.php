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

            input#search-button {
                border: 1px solid gray;
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
                            <span style="font-size: 1.2rem; font-weight:bold;">Teachers</span> :
                            <?php
                            if (isset($_SESSION['sms1'])) {
                                if ($_SESSION['sms1'] === 1) {
                            ?>
                                    <span class="text-success">Teacher Registerd 😊 </span>
                                <?php
                                    unset($_SESSION['sms1']);
                                } else if ($_SESSION['sms1'] === 0) {
                                ?>
                                    <span class="text-danger">Image Not upload somthing Error </span>
                                <?php
                                    unset($_SESSION['sms1']);
                                } else if ($_SESSION['sms1'] === 2) {
                                ?>
                                    <span class="text-danger">Please Upload Only JPG,PNG and JPEG image</span>
                            <?php
                                    unset($_SESSION['sms1']);
                                }
                            }
                            ?>
                        </div>
                        <div class="card-title mb-2">
                            <a href="teacher-registration" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i> Register Teacher</a>
                            <a href="assign-role" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i> Assign Role</a>
                            <a href="teacher-registration" class="btn btn-primary btn-sm"><i class="fas fa-book"></i> Assign Subjects</a>
                        </div>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="search" placeholder="Search By Email, Name, Salary, Position and Joining date" aria-label="Recipient's username" aria-describedby="button-addon2" />
                                        <input class="btn btn-primary" name="sbtn" type="submit" value="Search" id="search-button">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr />
                        <div class="card-body table-responsive">
                            <table class="table align-middle mb-0 bg-white">
                                <?php
                                if (isset($_POST['sbtn'])) {
                                    $search = $_POST['search'];
                                ?>
                                    <thead class="bg-light">
                                        <tr>
                                            <th>#S.No</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Role</th>
                                            <th>Salary</th>
                                            <th>Subjects</th>
                                            <th>Address</th>
                                            <th>Joining Date</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sel = "SELECT teachers.*, subjects.s_name, teacher_salary.salary, t_position.position FROM teachers LEFT JOIN subjects ON teachers.t_email = subjects.t_email LEFT JOIN teacher_salary ON teachers.t_email = teacher_salary.t_email LEFT JOIN t_position ON teachers.t_email = t_position.t_email WHERE teachers.t_name LIKE '%$search%' OR teachers.t_email LIKE '%$search%' OR teachers.t_join_date LIKE '%$search%' OR teacher_salary.salary LIKE '%$search%' OR t_position.position LIKE '%$search%'";
                                    $query1 = mysqli_query($con, $sel);
                                    $row=mysqli_num_rows($query1);
                                    if ($row > 0) {
                                        $sn=1;
                                        while ($data = mysqli_fetch_assoc($query1)) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $sn; ?></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="code/teacher-image/<?= $data['t_image']; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                    </div>
                                                </td>
                                                <td><?= $data['t_name']; ?></td>
                                                <td><?= $data['t_email']; ?></td>
                                                <td><?= $data['t_mobile']; ?></td>
                                                <td><?= $data['position']; ?></td>
                                                <td><?= $data['salary']; ?></td>
                                                <td><?= $data['s_name']; ?></td>
                                                <td><?= $data['t_address']; ?></td>
                                                <td><?= $data['t_join_date']; ?></td>
                                                <td><a href="#"></a></td>
                                                <td><a href="#"></a></td>
                                            </tr>
                                        <?php
                                        $sn++;
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td class="text-danger text-center">There is no result what you Search..</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    <?php
                                } else {
                                    ?>
                                    <thead class="bg-light">
                                        <tr>
                                            <th>#S.No</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Role</th>
                                            <th>Salary</th>
                                            <th>Subjects</th>
                                            <th>Address</th>
                                            <th>Joining Date</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sn = 1;
                                        $sel = "SELECT teachers.*, subjects.s_name, teacher_salary.salary, t_position.position FROM teachers LEFT JOIN subjects ON teachers.t_email = subjects.t_email LEFT JOIN teacher_salary ON teachers.t_email = teacher_salary.t_email LEFT JOIN t_position ON teachers.t_email = t_position.t_email";
                                        $query = mysqli_query($con, $sel);
                                        if (mysqli_num_rows($query) > 0) {
                                            while ($data = mysqli_fetch_assoc($query)) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"><?= $sn; ?></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="code/teacher-image/<?= $data['t_image']; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                        </div>
                                                    </td>
                                                    <td><?= $data['t_name']; ?></td>
                                                    <td><?= $data['t_email']; ?></td>
                                                    <td><?= $data['t_mobile']; ?></td>
                                                    <td><?= $data['position']; ?></td>
                                                    <td><?= $data['salary']; ?></td>
                                                    <td><?= $data['s_name']; ?></td>
                                                    <td><?= $data['t_address']; ?></td>
                                                    <td><?= $data['t_join_date']; ?></td>
                                                    <td><a href="#"></a></td>
                                                    <td><a href="#"></a></td>
                                                </tr>
                                            <?php
                                                $sn += 1;
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td class="text-danger text-center">You don't have any teacher in your school kindly hire.</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                <?php
                                }
                                ?>
                            </table>
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
        </script>
    </body>

    </html>
<?php
} else {
    $_SESSION['sms'] = 2;
    header("Location:../admin-login");
}
?>