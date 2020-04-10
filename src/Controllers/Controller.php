<?php

namespace App\Controllers;

use Interop\Container\Exception\ContainerException;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;

class Controller
{

    /**
     * @var Container
     */
    protected Container $container;

    /**
     * Controller constructor.
     * @param $container
     */
    public function __construct($container) {
        $this->container = $container;
    }

    /**
     * @param ResponseInterface $response
     * @param $path
     * @param array|null $params
     */
    protected function render(ResponseInterface $response, $path, ?array $params) {
        $this->container->view->render($response, $path, $params);
    }

    /**
     * @param ResponseInterface $response
     * @param string $route
     * @param array $args
     * @return ResponseInterface
     * @throws ContainerException
     */
    protected function redirect(ResponseInterface $response, string $route, array $args = []) {
        return $response->withStatus(302)->withHeader("Location", $this->container->get('router')->pathFor($route, $args));
    }

    /**
     * @param $name
     * @return mixed
     * @throws ContainerException
     */
    public function __get($name) {
        return $this->container->get($name);
    }
}
