<?php
namespace App;

use React\EventLoop\LoopInterface;
use React\EventLoop\StreamSelectLoop;

class AppLoop implements LoopInterface
{
    private $loop;

    public function __construct()
    {
        $this->loop = new StreamSelectLoop();
    }

    public function addReadStream($stream, $listener)
    {
        return $this->loop->addReadStream($stream, $listener);
    }
    public function addSignal($signal, $listener){
        return $this->loop->addSignal($signal, $listener);
    }
    public function removeSignal($signal, $listener){
        return $this->loop->removeSignal($signal, $listener);
    }

    public function addWriteStream($stream, $listener)
    {
        return $this->loop->addWriteStream($stream, $listener);
    }

    public function removeReadStream($stream)
    {
        return $this->loop->removeReadStream($stream);
    }

    public function removeWriteStream($stream)
    {
        return $this->loop->removeWriteStream($stream);
    }

    public function addTimer($interval, $callback)
    {
        return $this->loop->addTimer($interval, $callback);
    }

    public function addPeriodicTimer($interval, $callback)
    {
        return $this->loop->addPeriodicTimer($interval, $callback);
    }

    public function cancelTimer($timer)
    {
        return $this->loop->cancelTimer($timer);
    }

    public function futureTick($listener)
    {
        return $this->loop->futureTick($listener);
    }

    public function tick()
    {
        return $this->loop->tick();
    }

    public function run()
    {
        return $this->loop->run();
    }

    public function stop()
    {
        return $this->loop->stop();
    }
}
