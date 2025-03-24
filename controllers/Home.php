<?php

class Home extends Controller {
  public function index() {
      $homemodel = $this->load_model('Home_model');
//      $mainCategories = $homemodel->get_all_main_categories();
      $books = $homemodel->get_all_books();
//      $data = $homemodel->get_all_blogs();
      $data = array();

      parent::index();
      $this->showTemplate(['books' => $books], 'mainpage');
      $this->showTemplate($data,'layout/footer');
      //die("Home - index");
    }
}
?>