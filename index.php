<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web loam</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<?php
    if(!isset($_SESSION['id'])){
?>
<body>
    
    <H1><center>Web loam</center></H1>
    <?php include"nav.php"; ?>
    <hr>
    <form action="post.php" method="get">
    หมวดหมู่:
    <select name="Category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <a href="login.php" style="float: right ;">เข้าสู่ระบบ</a>
    <br>
    
    <table class="table table-striped">
        <?php
            for($i=1;$i<=10;$i++){
                echo "<tr><td><a href=post.php?id="."$i". ">กระทู้ที่ ".$i."</a></td></tr>";
                
            } 
        ?>
      
    </table>
    </form>
</body>
<?php
    }
    else{
    ?>
    <body>
    <H1><center>Web loam</center></H1>
    <?php include"nav.php"; ?>
    <hr>
    <form action="post.php" method="get">
    หมวดหมู่:
    <select name="Category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <div style="float:right">
    <?php 
        echo"ผู้ใช้งานระบบ : ",$_SESSION['username'] ;?>&nbsp;&nbsp;
    <a href="logout.php">ออกจากระบบ</a>
    </div>
    <br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <br>
    
    <ul>
    <table class="table table-striped">
        <?php
            for($i=1;$i<=10;$i++){
                echo"<li>";
                echo "<tr><td><a href=post.php?id="."$i". ">กระทู้ที่ ".$i."</a></td></tr>";
                if($_SESSION["role"]=='a'){
                    echo"&nbsp;&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";
                }
                echo"</li>";
            } 
        ?>     
    </table>
      
    </ul>
    </form>
</body>
   <?php
    }
   ?>     
</html>