<?php

use Kerbitgr\EasyORM\Database\Connection;

it('can create a sqlite connection', function () {
    $connection = new Connection(
        'sqlite',
        database: ':memory:'
    );

    expect($connection->pdo())->toBeInstanceOf(PDO::class);
});


it('rejects unsupported database drivers', function () {
    new Connection(
        'unsupported',
        database: ':memory:'
    );
})->throws(InvalidArgumentException::class);


it('can execute a query through the sqlite connection', function () {
    $connection = new Connection(
        'sqlite',
        database: ':memory:'
    );

    $result = $connection->pdo()->query('SELECT 1');

    expect($result->fetchColumn())->toBe(1);
});
