<?php

class ProductModel extends DB
{
    public function getName()
    {
        $result = mysqli_query($this->con, "Select * from sanpham");
        $arr = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($arr, $row);
        }
        return json_encode($arr);
    }
}