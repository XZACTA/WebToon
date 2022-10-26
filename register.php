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
    <title>Register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
</head>
<body><h1><center>สมัครสมาชิก</center></h1>
<?php include "nav.php"; ?>
    <hr>
    <br>
    <div class="card text-light bg-light">
    <div class="card-header bg-primary">กรอกข้อมูล</div>
    <div class="card-body">
    <div class="row mb-3"></div>
    <table class="card text-dark" align="center">
    
        <tr align="center"><td>ชื่อบัญชี :</td><td><input type="text"name="ชื่อบัญชี" size="70"></td></tr>
        <tr><td>รหัสผ่าน :</td><td><input type="password"name="password" size="70"></td></tr>
        <tr><td>ชื่อ-นามสกุล :</td><td><input type="text"name="ชื่อ-นามสกุล" size="70"></td></tr>
        <tr><td>เพศ :</td><td>
            <input type="radio"name="เพศ" value="m">ชาย<br>
            <input type="radio"name="เพศ" value="f">หญิง<br>
            <input type="radio"name="เพศ" value="o">อื่นๆ<br>
        </td></tr>
        <tr><td>อีเมล :</td><td><input type="text"name="อีเมล" size="70"></td></tr>
        <tr><td align="center" colspan="2"><input type="submit" value="สมัครสมาชิก"></td></tr>

    </table>
    </div>
    </div>
    <table style="border:2px black solid ;width: 40%;"align="center">
        <tr><td style="background-color: #6CD2FE;" colspan="2">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี :</td><td><input type="text"name="ชื่อบัญชี" size="70"></td></tr>
        <tr><td>รหัสผ่าน :</td><td><input type="password"name="password" size="70"></td></tr>
        <tr><td>ชื่อ-นามสกุล :</td><td><input type="text"name="ชื่อ-นามสกุล" size="70"></td></tr>
        <tr><td>เพศ :</td><td>
            <input type="radio"name="เพศ" value="m">ชาย<br>
            <input type="radio"name="เพศ" value="f">หญิง<br>
            <input type="radio"name="เพศ" value="o">อื่นๆ<br>
        </td></tr>
        <tr><td>อีเมล :</td><td><input type="text"name="อีเมล" size="70"></td></tr>
        <tr><td align="center" colspan="2"><input type="submit" value="สมัครสมาชิก"></td></tr>

    </table>
    <br>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
    
</body>
</html>