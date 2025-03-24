<?php

class Book_model extends Model {


    public function get_book($id) {
        $sql = "SELECT *, author.name AS author_name
                FROM book
                JOIN author ON book.id_author = author.id
                WHERE book.id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



}