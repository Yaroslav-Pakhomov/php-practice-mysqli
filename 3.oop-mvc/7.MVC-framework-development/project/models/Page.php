<?php

declare(strict_types=1);

namespace Project\Models;

use Core\Model;

class Page extends Model {

    public function getById($id): false|array|null {
        return $this->findOne("SELECT * FROM page WHERE id=$id");
    }

    public function getAll(): ?array {
        return $this->findMany("SELECT id, title FROM page");
    }
}
