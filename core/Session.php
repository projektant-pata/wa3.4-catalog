<?php

trait Session {

    public function set_session($key,$value) {
        $_SESSION[$key] = $value;
    }

    public function get_session($key) {
        if(isset($_SESSION[$key])) return $_SESSION[$key];
        else return false;
    }

    public function set_flash($value) {
        $this->set_session('flash',$value);
    }

    public function get_flash() {
        if(isset($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            unset($_SESSION['flash']);
            return $flash;
        }
        else return false;
    }

    public function logged_in() {
        return $this->get_session('loggedin');
    }
    public function destroy_session($key) {
        unset($_SESSION[$key]);
    }

}