<?php


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;

class SampleMiddleware
{

    public function __invoke(RequestInterface $request, ResponseInterface $response, $next) {
        return ($next($request, $response));
    }

}
