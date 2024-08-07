<?php
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.4.0-web/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css"/>
</head>
<body>
<div class="main">
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
    <div><a href="adminCTy.php">Quản lý</a></div>
</nav>

    <section class="d-flex">
            <aside>
            <div class="as1_ad">
            <div><a href="adminCTy.php" class="as1_ql">Quản lý công ty</a></div><br>
            <div><a href="adminSp.php" class="as1_ql">Quản lý sản phẩm</a></div>
            </div>
            </aside>

        <div class="list_add">
            <h2>Thêm sản phẩm mới</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name = "tensp" required></td>
                </tr>
                <tr>
                    <td>Đơn giá</td>
                    <td><input type="number" name="dongia" required></td>
                </tr>
                <tr>
                    <td>Ảnh sản phẩm</td>
                    <td><input type="file" name="file_name" required></td>
                </tr>
                <tr>
                <td>Số lượng</td>
                    <td><input type="number" name="soluong" required></td>
                </tr>
                    <td>Danh mục</td>
                    <td>
                    <?php include_once("view/QuanLy/addSP.php"); ?>
                    </td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td><input type="text" name ="mota" required></td>
                </tr>
            </table>
            <button type="reset" class="rs">Nhập lại</button>
            <button type="submit" name="btn_add" class="add">Thêm sản phẩm</button>
            </form>
        </div>
    </section>
<footer>
    <p>Tên: Đoàn Duy Khương</p>
    <p>MSSV: 21055151</p>
</footer>
</div>
</body>
</html>