<?php
    include_once 'pdo.php';
    function feedback_list($id){
        $sql="SELECT * FROM BinhLuan bl INNER JOIN KhachHang kh
        ON bl.MaKhachHang=kh.MaKhachHang WHERE MaSanPham=?";
        return pdo_query($sql,$id);
    }
    function feedback_add($idKH,$feedback,$id){
        $sql="INSERT INTO BinhLuan(MaKhachHang,NoiDung,MaSanPham)
        VALUE (?,?,?)";
        return pdo_execute($sql,$idKH,$feedback,$id);
    }
?>