<?php

class UserModel extends DB
{
    public function Insert($userName, $pass)
    {
        return mysqli_query($this->con, "INSERT INTO `taikhoan`(`tendangnhap`, `matkhau`) VALUES ('$userName','$pass')");
    }
    public function checkUser($userName)
    {

        return mysqli_fetch_row(mysqli_query($this->con, "Select * from taikhoan where tendangnhap = '$userName'"));

    }
}