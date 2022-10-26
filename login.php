<?php

    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        dei();
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Web</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style type="text/css">
        p{
            border:2px solid black;
            padding:40px;
            margin:30px;
         }
    </style>

</head>
<body>
   <div class="container">
        <h1><center> Login WebLoam</center></h1>
        <?php include "nav.php"; ?>
        <hr>
        <br>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <?php
            if(isset($_SESSION['eror'])){
                echo "<div class='alert alert-danger'>
                ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                unset($_SESSION['error']);
            }
        ?>
        <div class="card text-dark bg-light">
        <div class="card-header">เข้าสู่ระบบ</div>
        <div class="card-body">
        
        <form action="verify.php" method="post">
            <div class="form-group mb-2">
                <label class="form-label">login:</label>
                <input type="text" name="Login" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Password:</label>
                <input type="text" name="Pwd" class="form-control">
            </div>
            <center><button type="submit" class="btn btn-secondary btn-sm mb-2">Login</button></center>
        
        </form>
        </div>
        </div>  
        </div>  
        <div class="col-md-4"></div>
        </div>  
        <div><center> ถ้ายังไม่เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center></div>
        </div>
    </div>
</body>
</html>