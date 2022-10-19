<?php
    if(!isset($_SESSION{'id'})){
?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d3d3d3;">
    <div class="container-fluid">
    <a href="index.php" class="navbar-brand"><i class="bi bi-house-door-fill"></i>HOME</a>
    </div>
</nav>
<?php }else{ ?>
    <nav class="navbar-expand-lg navbarlight" style="background-color:#d3d3d3 ;">
        <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                    <i class="bi bi-house-door-fill"></i>HOME
                </a>
            <ul class="dropdown">
                <a class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button" id="button1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-lines-fill"></i>
                    <?php echo $_SESSION["username"]; ?>

                </a>
                <ul class="dropdown-menu" aria-labelledby="button1">
                    <li><a href="logout.php" class="dropdown-item"><i class="bi bi-power"></i>ออกจากระบบ</a></li>
                </ul>
            </ul>
        </div>
    </nav>
<?php } ?>