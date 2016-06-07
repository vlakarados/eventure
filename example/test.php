<?php

require_once(__DIR__.'/../vendor/autoload.php');

require_once(__DIR__.'/../src/Dispatcher.php');
require_once(__DIR__.'/../src/NotFoundException.php');

require_once(__DIR__.'/../example/ExampleDispatcher.php');


class UserRepository
{
    protected $x = 123;

    public function delete($userId)
    {
        echo 'Deleting user #'.$userId.PHP_EOL;
    }
}

$injector = new \Auryn\Injector;
$injector->share($injector); // you need to pass auryn to the dispatcher

$exampleDispatcher = $injector->make('\ExampleDispatcher');

// Simple event without arguments
$exampleDispatcher->dispatch('foo');

// Named argument
$exampleDispatcher->dispatch('user_created', array('userId' => 123));
// Event name camel case
$exampleDispatcher->dispatch('userCreated', array('userId' => 234));

// Multiple arguments
$exampleDispatcher->dispatch('user_action', array('userId' => 456, 'action' => 'log in'));

// Injections in event method arguments
$exampleDispatcher->dispatch('user_delete', array('userId' => 456));
