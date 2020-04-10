<?php


namespace App\Controllers;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PagesController extends Controller
{

    public function getIndex(RequestInterface $request, ResponseInterface $response) {
        $this->render($response, 'pages/index.html.twig', ['title' => 'Page d\'accueil']);
    }
}
