<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Web Loam</h1>
    <hr>
    <br>
    <div align="center"> ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?>
    <div align="center"> เป็นกระทู้หมายเลข 
        <?php 
        $x=$_GET["id"]%2;
        if($x==0){
            echo "คู่";
        }
        elseif($x==1){
            echo "คี่";
        }
        ?>
    
    </div>
    <br>
    <table style="border:2px solid black; width: 40%" align="center">
        <tr><td  style="background-color: #6CD2FE ;"colspan="2">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea name="" id="" cols="70%" rows="10"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        
    </table>
    <br>
    <a href="index.php"><center>กลับไปหน้าหลัก</center></a>
    
</body>
</html>