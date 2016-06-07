# eventure
[Auryn](https://github.com/rdlowrey/auryn) event dispatching

## What

A very small library to work with simple events.

The whole point of this library is to allow [Auryn](https://github.com/rdlowrey/auryn) to inject dependencies straight to your event methods.

## Install

    composer require vlakarados/eventure

## How

+ Create a class and extend `\Eventure\Dispatcher`

> Any public method in this class will be a registered event for the corresponding dispatcher.

> Two functions are used by the parent dispatcher class that may not be overriden (restricted event names): `dispatch()`, `hasEvent()`.

+ Inject the class instance in any other object across your project and use the `dispatch($eventName)` method to send the event. 

## Example

Examples are in the `example/` directory, the [ExampleDispatcher](example/ExampleDispatcher.php) and the [test bootstrap file](example/test.php).


## TODO

+ Callback dispatchers
+ Remove method restriction
+ Better README.md
+ Better documentation
+ Any documentation, actually
+ Dispatcher class factory (?)
+ Static event calls like `\App\Dispatchers\User::dispatch('logIn', array('userId' => 12345))` or `\App\Dispatchers\User::logIn(array('userId' => 12345))` (?) 
