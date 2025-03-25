<?php

class Category_model extends Model {

    public function get_category($id) {
        $sql = "SELECT * FROM category WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function get_children($id) {
        $sql = "SELECT * FROM category WHERE id_parent = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function get_children_books($id, $data) {
        $books = $this->get_all_books_by_category($id);
        $data = array_merge($data, $books);

        $sql = "SELECT * FROM category WHERE id_parent = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        $children = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($children as $child) {
            $data = $this->get_children_books($child['id'], $data);
        }

        return $data;
    }

    private function get_all_books_by_category($id) {
        $sql = "SELECT book.*, author.name as author_name
                FROM book 
                JOIN author ON book.id_author = author.id
                WHERE id_category = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_all_categories() {
        $sql = "SELECT c.*, p.name as 'parent' FROM category c LEFT JOIN category p ON c.id_parent = p.id";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save_category($name, $parent) {
        $sql = "INSERT INTO category (name, id_parent) VALUES(?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $parent]);
    }

    public function update_category($id, $name, $parent) {
        $sql = "UPDATE category SET name = ?, id_parent = ? WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $parent, $id]);
    }
    public function delete_category($id) {
        $sql = "DELETE FROM category WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
    }
}