<?php
include_once("ketnoi.php");
class MCongTy{
    public function SelectALLCT(){
        $p=new ketnoi();
        $conn=$p->moketnoi();
        $conn->set_charset('utf8');
        if($conn){
            $str= "select * from Loai_SP";
            $tbl = $conn->query($str);
            $p->dongketnoi($conn);
            return $tbl;
        }
        else{
            return false;
        }
    }
}
?>