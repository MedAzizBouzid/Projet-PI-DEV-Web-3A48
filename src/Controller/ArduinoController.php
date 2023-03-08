<?php

namespace App\Controller;

// use React\EventLoop\Factory;

use App\AppLoop;
use React\EventLoop\LoopInterface;
use App\EvnetLoop;
use React\EventLoop\StreamSelectLoop;
use React\Socket\Connector;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use GuzzleHttp\Client;

class ArduinoController extends AbstractController
{
    // private $loop;

    // public function __construct(AppLoop $loop)
    // {
    //     $this->loop = $loop;
    // }

    #[Route(path: '/data', name: 'data')]
    public function readRefid(Request $request): Response
    {
       $data = file_get_contents('http://192.168.0.11');

		$data = json_decode($data);
       dd($data);
        $client = new Client();
        $response = $client->post('http://localhost:8000/read-refid', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => $data,
        ]);
        return new Response($response->getBody()->getContents());

    }
}
