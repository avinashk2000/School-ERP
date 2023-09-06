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
                            <span style="font-size: 1.2rem; font-weight:bold;">Teacher Registration</span>
                            <a href="teachers" class="btn btn-primary btn-sm"> <i class="fas fa-caret-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="code/register-teacher.php" method="post" enctype="multipart/form-data">
                                <div class="row ">
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example1">Teacher Name</label> : <span id="err"></span>
                                        <input type="text" name="name" id="name" onkeyup="validatename()" required class="form-control" />
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example2">Teacher Email</label> : <span id="erre"></span>
                                        <input type="email" name="email" id="email" required class="form-control" onkeyup="validateemail()" />
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example2">Teacher Mobile No</label> : <span id="erm"></span>
                                        <input type="text" maxlength="10" name="mobile" required id="mobile" class="form-control" onkeyup="validemobile()"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example">Salary</label> : <span id="errs"></span>
                                        <input type="number" name="salary" id="salary" required class="form-control" />
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example2">Join Date</label>
                                        <input type="date" name="date" id="date" required class="form-control" />
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="form6Example7">Address</label>
                                        <textarea class="form-control" name="address" id="adrress" required rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4 mb-3">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Select an Image</label>
                                            <input type="file" class="form-control" required name="profile" id="image" accept="image/*">
                                        </div>
                                        <div class=" col-sm-4 mb-3">
                                            <img id="preview" alt="Image Preview" width="200" class="img-fluid rounded">
                                        </div>
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
            // image preview

            const imageInput = document.getElementById('image');
            const previewImage = document.getElementById('preview');

            // Listen for changes in the file input
            imageInput.addEventListener('change', (event) => {
                const selectedFile = event.target.files[0];

                if (selectedFile) {
                    const reader = new FileReader();

                    reader.onload = (e) => {
                        previewImage.src = e.target.result;
                    };

                    reader.readAsDataURL(selectedFile);
                } else {
                    previewImage.src = '#';
                    previewImage.hidden = true;
                }
            });

            let validatename = ()=>{
                let name=document.getElementById('name').value;
                let nameRex=/^[a-zA-Z\s]*$/
                let err=document.getElementById('err')
                if(name.length===0){
                    err.textContent=''
                }else if(name.match(nameRex)){
                    err.textContent=''
                }else{
                    err.textContent='Name contain only letters and spaces.'
                    err.style.color='red'
                    err.style.fontSize='15px'
                }
                
            }
            let validateemail=()=>{
                let email=document.getElementById('email').value
                let emailRex=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
                let err=document.getElementById('erre')
                if(email.length===0){
                    err.textContent=''
                }else if(email.match(emailRex)){
                    err.textContent=''
                }else{
                    err.textContent="Please enter a valid email address."
                    err.style.color="red"
                    err.style.fontSize="15px"
                }
            }
            let validemobile=()=>{
                let mobile=document.getElementById('mobile').value;
                let mobileRex=/^(\+91|0)?[6789]\d{9}$/
                let err=document.getElementById('erm')
                if(mobile.length===0){
                    err.textContent=''
                }else if(mobile.match(mobileRex)){
                    err.textContent=''
                }else{
                    err.textContent='Please enter valid mobile number'
                    err.style.color='red'
                    err.style.fontSize='15px'
                }
            }
        </script>
    </body>

    </html>
<?php
} else {
    $_SESSION['sms'] = 2;
    header("Location:../admin-login");
}
?>