<?php
class App
{
    protected $controller = "Home";
    protected $action = "Index";
    protected $params = [];

    public function __construct()
    {

        $arr = $this->urlProcess();

        // xu ly controller
        if (file_exists("./mvc/controllers/" . @$arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";

        // xu ly action
        if (isset($arr[1]) && method_exists($this->controller, $arr[1])) {
            $this->action = $arr[1];
            unset($arr[1]);
        }

        // xu ly params
        $this->params = $arr ? array_values($arr) : [];

        $obj = new $this->controller();
        call_user_func_array([$obj, $this->action], $this->params);

    }

    protected function validate($data)
    {
        return htmlspecialchars(stripcslashes(trim($data)));

    }

    protected function urlProcess()
    {

        if (isset($_GET['url'])) {
            $arr = explode("/", $_GET['url']);
            $countArr = count($arr);
            for ($i = 0; $i < $countArr; $i++) {
                $arr[$i] = $this->validate($arr[$i]);
            }
            return $arr;
        }

    }

}