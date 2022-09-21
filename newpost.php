<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><center>WebLoam</center></h1>
<hr>
<table>
<tr><td>
<?php
    echo "&nbsp;ผู้ใช้ &nbsp;:&nbsp; $_SESSION[username]";
?>
</td>
<tr><td>หมวดหมู่:</td><td><select name="Category">
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select></td></tr>
    <tr><td>หัวข้อ :</td><td><input type="text"></td></tr>
    <tr><td>เนื้อหา :</td><td><textarea name="" id="" cols="25%" rows="2"></textarea></td></tr>
    <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
</table>
</body>
</html>