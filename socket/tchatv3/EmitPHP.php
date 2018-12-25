<?php

include(__DIR__.'/vendor/autoload.php');

use ElephantIO\Client,
ElephantIO\Engine\SocketIO\Version1X;




$version = new Version1X("http://localhost:3000");
$client = new Client($version);

try
{
    $client->initialize();
    $client->emit('new_order', ['foo' => 'bar']);
    $client->close();
}
catch (ServerConnectionFailureException $e)
{
    echo $e;
}
