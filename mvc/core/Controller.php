<?php
class Controller
{
    public function model($model)
    {
        require_once "./mvc/models/" . $model . ".php";
        return new $model;
    }

    public function view($view, $data = [])
    {
        if (isset($data["Layout"])) {
            require_once "./mvc/views/shared/" . $data["Layout"] . ".php";
        } else {
            require_once "./mvc/views/" . $view . ".php";
        }

    }
}