<?php

class Author_model extends Model{
    public function get_author($id){
        $sql = "SELECT * FROM author WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function get_all_authors(){
        $sql = "SELECT * FROM author";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function save_author($name, ){
        $sql = "INSERT INTO author (name) VALUES(?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name]);
    }
    public function update_author($id, $name){
        $sql = "UPDATE author SET name = ? WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $id]);
    }
    public function delete_author($id){
        $sql = "DELETE FROM author WHERE id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$id]);
    }

}