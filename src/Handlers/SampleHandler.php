<?php


namespace App\Handlers;


use App\Database\Database;
use Aura\SqlQuery\QueryFactory;
use PDO;

class SampleHandler
{

    /**
     * @var Database $database
     */
    private Database $database;
    /**
     * @var QueryFactory $queryFactory
     */
    private QueryFactory $queryFactory;

    /**
     * UserHandler constructor.
     * @param Database $database
     */
    public function __construct(Database $database) {
        $this->database = $database;
        $this->queryFactory = new QueryFactory('mysql');
    }

    /**
     * @return array
     */
    public function getUsers(): array {
        return ['Am', 'Stram', 'Gram'];
    }

}
