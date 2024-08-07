<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.4.0-web/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css"/>
</head>
<body>
<header class="d-flex">
    <a href="index.php"><img src="assets/images/logo.png" alt="" style="width:190px;"></a>

    <form action="index.php" method="post">
        <div class="search">
        <input type="text"  name="txtsearch" placeholder="tìm kiếm">
        <button type="submit" name ="btnsearch" value="search"> <i class="fas fa-search"></i></button>
        </div>
    </form> 
</header>

<nav class="d-flex">
    <div><a href="index.php">Trang chủ</a></div>
    <div><a href="addSP.php">Quản lý</a></div>
</nav>

    <section class="d-flex">
            <aside>
            <h3>Danh Mục</h3>
            <div class="as1">
            <?php
                include_once("view/CongTy/menuCongTy.php");
            ?>
            </div>
            </aside>

        <div class="list_section">
            <?php 
                include_once("view/SanPham/index.php");
            ?>
        </div>
    </section>
<footer>
    <p>Tên: Đoàn Duy Khương</p>
    <p>MSSV: 21055151</p>
</footer>
</body>
</html>