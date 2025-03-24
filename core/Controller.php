<?php

class Controller {
    private $model;

    use View, Session;

    public function index()
    {
        $homemodel = $this->load_model('Home_model');
        $mainCategories = $homemodel->get_all_main_categories();
        $this->showTemplate(null,'layout/header');
        $this->showTemplate(['mainCategories' => $mainCategories], 'menu');
    }
    public function load_model($modelname) {
        $this->model = $modelname;
        return new $this->model;
    }

}