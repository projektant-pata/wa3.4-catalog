<?php

class Admin extends Controller {
    public function __construct() {
        if(!$this->logged_in()) redir('user');
    }

    public function index() {
        parent::index();
        $categorymodel = $this->load_model('Category_model');
        $booksmodel = $this->load_model('Book_model');
        $authormodel = $this->load_model('Author_model');
        $data['categories'] = $categorymodel->get_all_categories();
        $data['books'] = $booksmodel->get_all_books();
        $data['authors'] = $authormodel->get_all_authors();
        $this->showTemplate($data,'admin');
        $this->showTemplate(null,'layout/footer');
    }
    public function new_category(?int $id = null) {
        parent::index();
        $categorymodel = $this->load_model('Category_model');
        $data['categories'] = $categorymodel->get_all_categories();
        if ($id) {
            $data['category_info'] = $categorymodel->get_category($id);
        }
        $this->showTemplate($data,'newcategory');
        $this->showTemplate(null,'layout/footer');
    }
    public function save_category() {
        $categorymodel = $this->load_model('Category_model');
        $name = htmlspecialchars($_POST['name']);
        $parent = htmlspecialchars($_POST['parent']);
        if ($parent == "")
            $parent = null;
        $categorymodel->save_category($name, $parent);
        redir('admin/newcategory');
    }

    public function update_category(int $id) {
        $categorymodel = $this->load_model('Category_model');
        $name = htmlspecialchars($_POST['name']);
        $parent = htmlspecialchars($_POST['parent']);
        if ($parent == "")
            $parent = null;
        $categorymodel->update_category($id, $name, $parent);
        redir('admin/admin');
    }

    public function delete_category(int $id) {
        $categorymodel = $this->load_model('Category_model');
        $categorymodel->delete_category($id);
        redir('admin');
    }

    public function new_book(?int $id = null) {
        parent::index();
        $categorymodel = $this->load_model('Category_model');
        $bookmodel = $this->load_model('Book_model');
        $authormodel = $this->load_model('Author_model');
        $data['categories'] = $categorymodel->get_all_categories();
        if ($id){
            $data['book_info'] = $bookmodel->get_book($id);
        }
        $data['authors'] = $authormodel->get_all_authors();
        $this->showTemplate($data, 'newbook');
        $this->showTemplate(null,'layout/footer');
    }
    public function save_book() {
        $bookmodel = $this->load_model('Book_model');
        $name = htmlspecialchars($_POST['name']);
        $author = htmlspecialchars($_POST['author']);
        $category = htmlspecialchars($_POST['category']);
        $price = htmlspecialchars($_POST['price']);
        $description = htmlspecialchars($_POST['description']);
        $bookmodel->save_book($name, $author, $category, $price, $description);
        redir('admin/newbook');
    }
    public function update_book(int $id) {
        $bookmodel = $this->load_model('Book_model');
        $name = htmlspecialchars($_POST['name']);
        $author = htmlspecialchars($_POST['author']);
        $category = htmlspecialchars($_POST['category']);
        $price = htmlspecialchars($_POST['price']);
        $description = htmlspecialchars($_POST['description']);
        $bookmodel->update_book($id, $name, $author, $category, $price, $description);
        redir('admin');
    }
    public function delete_book(int $id) {
        $bookmodel = $this->load_model('Book_model');
        $bookmodel->delete_book($id);
        redir('admin');
    }
    public function new_author(?int $id = null) {
        parent::index();
        $authormodel = $this->load_model('Author_model');
        if ($id) {
            $data['author_info'] = $authormodel->get_author($id);
        }else{
            $data['author_info'] = null;
        }
        $this->showTemplate($data, 'newauthor');
        $this->showTemplate(null,'layout/footer');
    }
    public function save_author() {
        $authormodel = $this->load_model('Author_model');
        $name = htmlspecialchars($_POST['name']);
        $authormodel->save_author($name);
        redir('admin/newauthor');
    }
    public function update_author(int $id) {
        $authormodel = $this->load_model('Author_model');
        $name = htmlspecialchars($_POST['name']);
        $authormodel->update_author($id, $name);
        redir('admin');
    }
    public function delete_author(int $id) {
        $authormodel = $this->load_model('Author_model');
        $authormodel->delete_author($id);
        redir('admin');
    }


}