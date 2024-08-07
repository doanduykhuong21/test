<?php
    include("controller/cSanPham.php");
    $p = new CSanPham();
    $tbl = $p->getAllSP();
    $perPage = 5;// số trang
    $totalRows = $tbl->num_rows;// tổng số sp
    $totalPages = ceil($totalRows / $perPage);//tính tổng số trang

    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;//xác định trang hiện tại

    // trang hiện tại không vượt quá số trang tối đa
    if ($currentPage > $totalPages || $currentPage < 1) {
        $currentPage = 1;
    }

    // Tính offset
    $offset = ($currentPage - 1) * $perPage;
    echo "<table>";
    echo "<thead>";
    echo "<th>ID</th>";
    echo "<th>Tên sản phẩm</th>";
    echo "<th>Hình ảnh</th>";
    echo "<th>Đơn giá</th>";
    echo "<th>Chức năng</th>";
    echo "</thead>";

    // Di chuyển con trỏ về vị trí đầu tiên của kết quả
    $tbl->data_seek($offset);

    for ($i = 0; $i < $perPage; $i++) {
        if ($row = $tbl->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["MaSP"] . "</td>";
            echo "<td>" . $row["TenSP"] . "</td>";
            echo "<td><img src='assets/images/" . $row["HinhAnh"] . "' width='100px' alt=''></td>";
            echo "<td>" . $row["DonGia"] . "</td>";
            echo "<td> sửa|xóa </td>";
            echo "</tr>";
        }
    }
    echo "</table>";

    //phân trang
    echo "<div>";
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $currentPage) {
            echo "<strong>$i</strong> ";
        } else {
            echo "<a href='?page=$i'>$i</a> ";
        }
    }
    echo "</div>";
?>
