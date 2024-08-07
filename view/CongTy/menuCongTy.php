<?php
    include("controller/cCongTy.php");
    
    $p = new CCongTy();
    $tblCT = $p->getAllCT();
    
    if(!$tblCT){
        echo "Không thể kết nối";
    }elseif($tblCT->num_rows == 0){
        echo "Chưa có dữ liệu";
    }else{
        while ($row=$tblCT->fetch_assoc()){
            echo "<a class='as_ct' href='index.php?Comp=".$row["MaLSP"]."'>".$row["TenLSP"]."</a><br><br>";
        }
    }
?>
