<?php

namespace App\Repository;

use PDO;
use PDOStatement;

abstract class AbstractRepository
{
    private static array $instances = [];
    protected PDO $connection;

    protected function __construct()
    {
        $this->connection = Database::getConnection();
    }

    public static function getInstance(): static
    {
        $class = static::class;

        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }

        return self::$instances[$class];
    }

    protected function query(string $sql): PDOStatement
    {
        return $this->connection->query($sql);
    }

    protected function prepare(string $sql): PDOStatement
    {
        return $this->connection->prepare($sql);
    }

    protected function executeQuery(string $sql, array $parameters = []): PDOStatement
    {
        $statement = $this->prepare($sql);
        $statement->execute($parameters);

        return $statement;
    }

    protected function executeUpdate(string $sql, array $parameters = []): int
    {
        return $this->executeQuery($sql, $parameters)->rowCount();
    }

    protected function getAllData(string $sql, array $parameters = []): array
    {
        return $this->executeQuery($sql, $parameters)->fetchAll();
    }
}
