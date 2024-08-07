<?php
    include("controller/cSanPham.php");
    $p = new CSanPham();
    if(isset($_GET["Comp"])){
        $tbl = $p->getAllSPbyCompany($_GET["Comp"]);
    }elseif(isset($_POST["btnsearch"])){
        $tbl = $p->getAllSPbyName($_POST["txtsearch"]);
    }
    else{
        $tbl = $p ->getAllSP();
    }
    if(!$tbl){
        echo "Không thể kết nối";
    }elseif($tbl == null){
        echo "Chưa có dữ liệu";
    }else{
        $dem = 0;
        echo "<table class'list_sec_sp'>";
        echo "<tr>";
        while($r=$tbl->fetch_assoc()){
            echo "<td class='sec1'>";
            echo "<img src='assets/images/".$r["HinhAnh"]."' width = '150px' alt =''>"."<br>";
            echo $r["TenSP"]."<br>";
            echo $r["DonGia"];
            echo "</td>";
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