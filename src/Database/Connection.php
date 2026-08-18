<?php

namespace Kerbitgr\EasyORM\Database;

use PDO;

class Connection
{
    public function __construct(
        private string $driver,
        private string $database,
    ) {
        if (!in_array($driver, ['sqlite', 'mysql'], true)) {
            throw new InvalidArgumentException(
                "Unsupported database driver: {$driver}"
            );
        }

    }

    public function pdo(): PDO
    {
        return new PDO(
            "{$this->driver}:{$this->database}"
        );
    }
}
