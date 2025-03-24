<?php
class Book extends Controller {
    public function index($id = null) {

        // Pokud není zadáno ID, zobrazit seznam knih
        if ($id === null) {
            // Kód pro zobrazení seznamu knih
            return;
        }

        $bookmodel = $this->load_model('Book_model');
        $book = $bookmodel->get_book($id);

        if (!$book) {
            $this->showTemplate(null, 'layout/_404');
            return;
        }

        parent::index();
        $this->showTemplate(['book' => $book], 'book');
        $this->showTemplate(null, 'layout/footer');
    }
}