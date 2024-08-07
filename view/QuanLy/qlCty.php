<?php
    include("controller/cCongTy.php");
    $p = new CCongTy();
    $tbl = $p ->getAllCT();

    if(!$tbl){
        echo "Không thể kết nối";
    }elseif($tbl == null){
        echo "Chưa có dữ liệu";
    }else{
        $dem = 0;
        echo "<table>";
        echo "<thead>";
        echo "<th>Mã loại SP</th>";
        echo "<th>Tên loại SP</th>";
        echo "<th>Mô tả</th>";
        echo "<th>Địa chỉ</th>";
        echo "<th>Chức năng</th>";
        echo "</thead>";
        while($r=$tbl->fetch_assoc()){
            echo "<tr>";
            echo "<td>";
            echo $r["MaLSP"];
            echo "</td>";

            echo "<td>";
            echo $r["TenLSP"];
            echo "</td>";

            echo "<td>";
            echo $r["MoTa"];
            echo "</td>";

            echo "<td>";
            echo "12 Nguyễn Văn Bảo, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh";
            echo "</td>";
            echo "<td> sửa|xóa </td>";
            echo "</tr>";
            $dem++;
            if($dem%5==0){
                echo "</tr>";
                echo "<tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }
?>