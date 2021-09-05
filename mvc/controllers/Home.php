<?php
class Home extends Controller
{
    public $modelProduct;
    public function __construct()
    {
        $this->modelProduct = $this->model("ProductModel");
    }
    public function Index()
    {
        $this->view("TrangChu", ["Layout" => "Layout", "Name" => $this->modelProduct->getName()]);
    }
    public function demo()
    {
        $this->view("DangNhap", []);
    }

}