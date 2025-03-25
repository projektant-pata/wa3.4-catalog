<?php

class Book_model extends Model {


    public function get_book($id) {
        $sql = "SELECT book.*, author.name AS author_name
                FROM book
                JOIN author ON book.id_author = author.id
                WHERE book.id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function get_all_books() {
        $sql = "SELECT b.*, a.name AS author_name, c.name AS category
                FROM book b
                JOIN author a ON b.id_author = a.id
                JOIN category c ON b.id_category = c.id";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function save_book($name, $author, $category, $price, $description) {
        $sql = "INSERT INTO book (name, id_author, id_category, price, description) VALUES(?, ?, ?, ?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $author, $category, $price, $description]);
    }
    public function update_book($id, $name, $author, $category, $price, $description) {
        $sql = "UPDATE book SET name = ?, id_author = ?, id_category = ?, price = ?, description = ? WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $author, $category, $price, $description, $id]);
    }
    public function delete_book($id) {
        $sql = "DELETE FROM book WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
    }



}