<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeController
 * @package App\Controller\Api
 */
class HomeController
{
    /**
     * @param Response $response
     *
     * @return Response
     */
    public function index(): Response
    {
        $response = new Response();
        $response->setContent(json_encode([
            'data' => [
                'status' => 'OK',
                'message' => 'simple-api',
            ],
        ]))->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @param Response $response
     *
     * @return Response
     */
    public function welcome(Request $request): Response
    {
        $name = $request->query->get('name');

        $response = new Response();
        $response->setContent(json_encode([
            'data' => [
                'status' => 'OK',
                'message' => 'Hello ' . $name,
            ],
        ]))->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
