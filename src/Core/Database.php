<?php
declare(strict_types=1);

namespace App\Core;

use PDO;
class Database
{
    static private ?PDO $pdo = null;
    function __construct(){

        if (self::$pdo == null) {
            self::$pdo = $this->getPDOConnection();
        }
    }

    function getPDOConnection(): PDO
    {
        $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=utf8';
        $user = DB_USER;
        $password = DB_PASS;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $pdo = new PDO($dsn, $user, $password, $options);

        return $pdo;
    }

    function executeQuery(string $sql, array $values = []): false|\PDOStatement
    {
        $pdoStatement = self::$pdo->prepare($sql);

        $pdoStatement->execute($values);

        return $pdoStatement;
    }

    function getAllResults(string $sql, array $values = []): false|array
    {
        $pdoStatement = $this->executeQuery($sql, $values);

        return $pdoStatement->fetchAll();
    }

    function getOneResult(string $sql, array $values = [])
    {
        $pdoStatement = $this->executeQuery($sql, $values);

        return $pdoStatement->fetch();
    }

}