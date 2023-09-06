<?php
    session_start();
    include 'connection.php';
    if(isset($_POST['loginButton'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $captcha=$_POST['captcha'];
        $captcha1=$_POST['captcha1'];
        if($captcha===$captcha1){
            $sel="SELECT * FROM admin WHERE admin_email='$email' and admin_password='$password'";
            $query=mysqli_query($con,$sel);
            if(mysqli_num_rows($query)>0){
                $data=mysqli_fetch_assoc($query);
                $_SESSION['sms']=1;
                $_SESSION['name']=$data["admin_name"];
                header("Location:../Admin/index.php");
            }else{
                $_SESSION['sms']=1;
                header("Location:../admin-login.php");
            }
        }else{
            $_SESSION['sms']=0;
            header("location:../admin-login.php");
        }
    }
?>