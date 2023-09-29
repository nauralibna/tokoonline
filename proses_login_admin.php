<?php 
    if($_POST){
        $email=$_POST['email']; 
        $password=$_POST['password'];
        if(empty($email)){
            echo "<script>alert('Email harus diisi');
            location.href='login_admin.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password harus diisi');
            location.href='login_admin.php';</script>";
        } else {
            include "../config/koneksi.php";
            $qry_cek=mysqli_query($conn,"select * from admin where email = '".$email."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_cek)>0){
                session_start();
                $dt_login=mysqli_fetch_array($qry_cek);
                $_SESSION['id_admin']=$dt_login['id_admin'];
                $_SESSION['nama_admin']=$dt_login['nama_admin'];
                $_SESSION['status_login_admin']=true;
                $_SESSION['role']=$dt_login['role'];
                header("location: home_admin.php");
            } else {
                echo "<script>alert('email dan Password salah');
                location.href='login_admin.php';</script>";
            }
        }
    }
?> 