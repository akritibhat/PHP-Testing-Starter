<?php
namespace UnitTests\AbstractTest;

abstract class AbstractTransport implements TransportInterface
{
    protected $port;

    public function setPort($port)
    {
        $this->port = $port;
    }
    public function getPort()
    {
        return $this->port;
    }
}

interface TransportInterface
{
    public function setPort($port);
    public function getPort();
}