<?php

namespace App\Models;



class Book extends Model {

    public function getAll() {
        $item = $this->db->prepare("SELECT * FROM book");

        $item->execute();

        return $item->fetchAll();
    }
}



?>