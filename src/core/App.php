<?php
class App {
    protected $controller = "Home";
    protected $action = "show";
    protected $param = [];

    function __construct() {
        $arr = $this->urlProcess();
        
        if (isset($arr[0]) && file_exists("./src/controllers/".$arr[0].".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./src/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        $this->param = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller, $this->action], $this->param);
        
    }

    function urlProcess() {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"],"/")));
        }
    }
}
?>