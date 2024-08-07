<?php
    class ketnoi{
        public function moketnoi(){
        return mysqli_connect('localhost','khuong','khuong442666','dkhuong');
    }
    
    public function dongketnoi($conn){
        $conn->close();
    }
    }
?>