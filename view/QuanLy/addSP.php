<?php
    include("controller/cCongTy.php");
    include("controller/cSanPham.php");
    $p = new CCongTy();
    $tbl = $p ->getAllCT();

    if(!$tbl){
        echo "Không thể kết nối";
    } elseif($tbl->num_rows == 0) {
        echo "Chưa có dữ liệu";
    } else {
        echo "<select name='danhmuc'>";
        while($r = $tbl->fetch_assoc()){
            echo "<option value='" . $r["MaLSP"] . "'>" . $r["TenLSP"] . "</option>";
        }
        echo "</select>";
    }

    if(isset($_POST["btn_add"])) {
        $TenSP = $_POST["tensp"];
        $DonGia = $_POST["dongia"];
        $SoLuong = $_POST["soluong"];
        $MaLSP = $_POST["danhmuc"];
        $HinhAnh = $_FILES["file_name"]["name"];
        $file_tmp = $_FILES["file_name"]["tmp_name"];
        $MoTa = $_POST["mota"];
        
        if($DonGia && $SoLuong<0){
            echo'không được số âm';
        }
        else{
            $file_type = strtolower(pathinfo($_FILES["file_name"]["name"], PATHINFO_EXTENSION));
        
            $allowed_extensions = array("jpg");
            
            if (!in_array($file_type, $allowed_extensions)) {
                echo "Thêm thất bại, chỉ cho phép tệp ảnh định dạng JPG";
            }
            else{
                $des = "assets/images/";
                $new_filename = uniqid() . '_' . $HinhAnh;//duy nhất
                $target_file = $des . $new_filename;
            
                // Di chuyển tệp ảnh vào thư mục lưu trữ
                if (move_uploaded_file($file_tmp, $target_file)) {
                    // Nếu di chuyển thành công, thêm thông tin sản phẩm và tên ảnh vào cơ sở dữ liệu
                    $p = new MSanPham();
                    $result = $p->AddProduct_DB($TenSP, $new_filename, $DonGia, $SoLuong, $MaLSP, $MoTa);
                    
                    if ($result) {
                        echo '<script>alert("Thêm sản phẩm thành công!");</script>';
                    } else {
                        echo "Lỗi khi thêm sản phẩm vào cơ sở dữ liệu.";
                    }
                } else {
                    echo "Lỗi khi tải lên tệp ảnh.";
                }
            }
        }

        
    }
    
    
?>
