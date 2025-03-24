<?php
class App {

    private $controller = DEFAULT_CONTROLLER;
    private $method = DEFAULT_METHOD;

    private function _split_url() {
        $URL = (isset($_GET['url'])) ? explode("/", $_GET['url']) : array("Home");
        return $URL;
    }

    public function load_controller() {
        $URL = $this->_split_url();

        $filename = "controllers/".ucfirst($URL[0]).".php";
        if(is_file($filename)) {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        } else {
            $this->controller = "_404";
        }

        $controller = new $this->controller;

        // metoda
        if(!empty($URL) && isset($URL[1])) {
            if(method_exists($controller, $URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }

        $params = array_values($URL);

        call_user_func_array([$controller, $this->method], $params);
    }
}