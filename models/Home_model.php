<?php

class Home_model extends Model {
    public function get_all_books() {
        $sql = "SELECT book.*, author.name AS author_name 
            FROM book 
            JOIN author ON book.id_author = author.id";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function get_all_main_categories() {
        $sql = "SELECT * FROM category WHERE id_parent IS NULL";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}