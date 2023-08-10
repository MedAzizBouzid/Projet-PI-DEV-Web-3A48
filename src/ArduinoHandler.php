<?php

namespace App;

use React\EventLoop\LoopInterface;
use React\Socket\ConnectionInterface;

class ArduinoHandler
{
    private $loop;

    public function __construct(LoopInterface $loop)
    {
        $this->loop = $loop;
    }

    public function __invoke(ConnectionInterface $conn)
    {
        $conn->on('data', function ($data) use ($conn) {
            // Récupère l'identifiant de la carte RefID
            $refid = trim($data);

            // Traite les données reçues de l'Arduino
            // ...

            // Envoie une réponse à l'Arduino
            $conn->write("OK\n");
        });

        $conn->on('close', function () {
            // Gère la déconnexion de l'Arduino
            // ...
        });
    }
}
