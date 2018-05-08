<?php

namespace App\Http\Controllers;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class IndexController extends Controller
{
    public function index()
    {
    	// phpinfo();die;
    	$connection = new AMQPStreamConnection('some-rabbit', 5672, 'guest', 'guest');
		$channel = $connection->channel();
    	$channel->queue_declare('hello', false, false, false, false);

		$msg = new AMQPMessage('Hello World!###@'.rand(0,100));
		$channel->basic_publish($msg, '', 'hello');

		echo " [x] Sent 'Hello World!'\n";
		$channel->close();
		$connection->close();
    }
}
