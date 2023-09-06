<?php
    session_start();
    include '../../database-code/connection.php';
    if(isset($_POST['register'])){
        $t_name=$_POST['name'];
        $t_email=$_POST['email'];
        $t_mobile=$_POST['mobile'];
        $t_salary=$_POST['salary'];
        $password=$t_name.rand(1000,9999);
        $join_date=$_POST['date'];
        $t_address=$_POST['address'];
        $t_image=$_FILES['profile']['name'];
        $tmp_name=$_FILES['profile']['tmp_name'];
        $exp=explode(".",$t_image);
        $ext=strtolower(end($exp));
        $p_image=$t_name . rand() . '.' .$ext;
        $path="teacher-image/".$p_image;
        if($ext=='jpg' or $ext=='jpeg' or $ext=='png')
        {
            if(move_uploaded_file($tmp_name,$path))
            {
                $ins="INSERT INTO teachers(t_name,t_email,t_mobile,password,t_image,t_address,t_join_date) values('$t_name','$t_email','$t_mobile','$password','$p_image','$t_address','$join_date')";
                $query=mysqli_query($con,$ins);
                $ins1="INSERT INTO teacher_salary(t_email,salary) VALUES('$t_email','$t_salary')";
                $query1=mysqli_query($con,$ins1);
                if($query){
                    $_SESSION['sms1']=1;
                    header("location:../teachers");
                }
            }else{
                $_SESSION['sms1']=0;
                header("location:../teachers");
            }
        }else{
            $_SESSION['sms1']=2;
            header("location:../teachers");
        }
    }
?>