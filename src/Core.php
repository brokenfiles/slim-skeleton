<?php


namespace App;


use App\Database\Database;
use Slim\App;

class Core
{
    /**
     * @var App
     */
    private App $app;
    /**
     * @var Database
     */
    private Database $database;

    /**
     * Core constructor.
     * @param App $app
     */
    public function __construct(App $app) {
        $this->app = $app;
    }

    public function loadApplication() {
        $this->database = new Database($this->app->getContainer()->get('config'));
        $this->database->init();
    }

    /**
     * @return Database
     */
    public function getDatabase() {
        return $this->database;
    }

}
