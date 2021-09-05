<?php
class Register extends Controller
{
    public $UserModel;
    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }
    public function Index()
    {
        $this->view("Register", ["Layout" => "Layout"]);
    }
    public function processRegister()
    {
        $user = $this->validate($_POST["userName"]);
        $pass = password_hash($this->validate($_POST["pass"]), PASSWORD_DEFAULT);
        $this->view("Register", ["Layout" => "Layout", "Result" => $this->UserModel->Insert($user, $pass)]);
    }
    protected function validate($data)
    {
        return htmlspecialchars(stripcslashes(trim($data)));

    }
    public function checkUser()
    {
        echo $this->UserModel->checkUser($_POST["userName"]);

    }

}