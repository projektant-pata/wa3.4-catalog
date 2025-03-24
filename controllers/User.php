<?php
class User extends Controller {

    public function __construct() {
        if($this->logged_in()) redir('user');
    }

    public function index() {
        parent::index();
        $this->showTemplate(null,'login');
        $this->showTemplate(null,'layout/footer');
    }

    public function login() {

        $usermodel = $this->load_model('User_model');
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']); 
        $user = $usermodel->get_user($email);
        if($user) {
            if(password_verify($password,$user['password'])) {
                //info o prihlaseni + presmerovani
                $this->set_session('loggedin',1);
                $this->set_session('loggeduser',$user['name']);
                redir('admin');
            }else{
                $this->set_flash('gg heslo');
            }
            $this->set_flash('gg user');
        }
//        $this->set_flash('špatné přihlášení');
        redir('user');  //nepovedlo se prihlaseni
    }

    public function register() {
        $data = array();
        $this->showTemplate($data,'layout/header');
        $this->showTemplate($data,'register');
        $this->showTemplate($data,'layout/footer');     
    }

    public function save_registered() {
        $usermodel = $this->load_model('User_model');
   
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']); 

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $usermodel->save_user($name, $email, $hash);
        redir('user');
    }
}