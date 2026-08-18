<?php

use Kerbitgr\EasyORM\Database\Connection;

it('can create a sqlite connection', function () {
    $connection = new Connection(
        'sqlite',
        database: ':memory:'
    );

    expect($connection->pdo())->toBeInstanceOf(PDO::class);
});