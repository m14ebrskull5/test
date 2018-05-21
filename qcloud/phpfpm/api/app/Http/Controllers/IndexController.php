<?php

namespace App\Http\Controllers;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class IndexController extends Controller
{
    public function index()
    {
    	$connection = new AMQPStreamConnection('mq', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        $channel->exchange_declare('delayed_exchange', 'x-delayed-message', false, true, false, false, false, new AMQPTable(array(
            "x-delayed-type" => "fanout"
        )));

        $channel->queue_declare('delayed_queue', false, true, false, false, false, new AMQPTable(array(
            "x-dead-letter-exchange" => "delayed"
        )));
        $channel->queue_bind('delayed_queue', 'delayed_exchange');
        $headers = new AMQPTable(array("x-delay" => $_GET['id']*1000));
        $message = new AMQPMessage('hello'.date('Y-m-d H:i:s',time()+30), array('delivery_mode' => 2));
        $message->set('application_headers', $headers);
        $channel->basic_publish($message, 'delayed_exchange');
        return 'hello'.date('Y-m-d H:i:s',time()+$_GET['id']);
    }
}
