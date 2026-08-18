<?php

namespace Kerbitgr\EasyORM\Database;

use PDO;

class Connection
{
    
    public function __construct(
        private string $driver,
        private string $database,
    ) {
    }

    public function pdo(): PDO
    {
        return new PDO(
            "{$this->driver}:{$this->database}"
        );
    }
}