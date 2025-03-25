<?php
class Category extends Controller {
    public function index($id = null) {
        if ($id === null) {
            return;
        }
        parent::index();

        $categorymodel = $this->load_model('Category_model');
        $category = $categorymodel->get_category($id);
        $children = $categorymodel->get_children($id);
        $books = $categorymodel->get_children_books($id, []);

        $this->showTemplate(['category' => $category['name'],
                             'children' => $children,
                             'books' => $books], 'category');
        $this->showTemplate(null, 'layout/footer');
    }

    public function update_category(int $id) {

    }
}