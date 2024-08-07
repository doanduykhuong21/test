<?php
    include("model/mSanPham.php");
    class CSanPham{
        public function getAllSP(){
            $p = new MSanPham();
            $tbl = $p->selectAllSP();
            if($tbl){
                if($tbl->num_rows>0){
                    return $tbl;
                }else{
                    return -1;
                }
            }else{
                return false;
            }
        }

        public function getAllSPbyCompany($comp){
            $p = new MSanPham();
            $tbl = $p->SelectAllSPbyCompany($comp);
            if($tbl){
                if($tbl->num_rows>0){
                    return $tbl;
                }else{
                    return -1;
                }
            }else{
                return false;
            }
        }

        public function getAllSPbyName($name){
            $p = new MSanPham();
            $tbl = $p->selectAllSPbyName($name);
            if($tbl){
                if($tbl->num_rows>0){
                    return $tbl;
                }else{
                    return null;
                }
            }else{
                return false;
            }
        }


    public function AddProduct($TenSP, $HinhAnh, $DonGia, $SoLuong, $MaLSP, $MoTa) {
    $p = new MSanPham();

    $result = $p->AddProduct_DB($TenSP, $HinhAnh, $DonGia, $SoLuong, $MaLSP, $MoTa);
    return $result;
}
        
    }
    

?>