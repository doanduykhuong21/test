<?php
include_once("ketnoi.php");
class MSanPham{
    public function SelectAllSP(){
        $p = new ketnoi();
        $conn = $p->moketnoi();
        $conn->set_charset('utf8');
        if($conn){
            $str = "select * from sanpham order by MaSP desc";
            $tblSP = $conn->query($str);
            $p->dongketnoi($conn);
            return $tblSP;
        }else{
            return false;
        }
    }

    public function SelectAllSPbyCompany($comp){
        $p = new ketnoi();
        $conn = $p->moketnoi();
        $conn->set_charset('utf8');
        if($conn){
            $str = "select * from sanpham where MaLSP = $comp order by MaSP desc";
            $tblSP = $conn->query($str);
            $p->dongketnoi($conn);
            return $tblSP;
        }else{
            return false;
        }
    }

    public function SelectAllSPbyName($name){
        $p = new ketnoi();
        $conn = $p->moketnoi();
        $conn->set_charset('utf8');
        if($conn){
            $str = "select * from sanpham where TenSP like N'%$name%'";
            $tblSP = $conn->query($str);
            $p->dongketnoi($conn);
            return $tblSP;
        }else{
            return false;
        }
    }

    public function AddProduct_DB($TenSP, $HinhAnh, $DonGia, $SoLuong, $MaLSP, $MoTa) {
        $p = new ketnoi();
        $conn = $p->moketnoi();
        $conn->set_charset('utf8');
        
        if ($conn) {
            // Tạo truy vấn SQL với các giá trị trực tiếp
            $str = "INSERT INTO SanPham (TenSP, HinhAnh, DonGia, SoLuong, MaLSP, MoTa) VALUES ('$TenSP', '$HinhAnh', '$DonGia', '$SoLuong', '$MaLSP', '$MoTa')";
    
            // Thực hiện truy vấn
            $result = $conn->query($str);
            
            // Đóng kết nối
            $p->dongketnoi($conn);
            
            return $result;
        } else {
            return false;
        }
    }

}

?>