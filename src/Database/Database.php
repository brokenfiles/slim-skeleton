<?php


namespace App\Database;


use PDO;
use PDOException;

class Database
{
    /**
     * @var array
     */
    private array $config;
    /**
     * @var PDO
     */
    private PDO $pdo;

    /**
     * Database constructor.
     * @param array $config
     */
    public function __construct(array $config) {
        $this->config = $config;
    }

    private function set_parameters() {
        if (!$this->config['production'])
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function init() {
        if ($this->config['database_connection']) {
            try {
                $this->pdo = new PDO($this->config['database']['driver'] .
                    ":host=" . $this->config['database']['host'] .
                    ";port=" . $this->config['database']['port'] .
                    ";dbname=" . $this->config['database']['dbname'] .
                    ";charset=UTF8;",
                    $this->config['database']['user'],
                    $this->config['database']['password']);
            } catch (PDOException $exception) {
                die('An error occured. Please contact an administrator. ERR = DATABASE_DOWN');
            }
            $this->set_parameters();
        }
    }

    /**
     * @return PDO
     */
    public function getPdo(): PDO {
        return $this->pdo;
    }

}
