# eventure
Auryn based events

## What

A very small library to work with simple events.

The whole point of this library is to allow Auryn to inject dependencies straight to your event methods.

## Install

    composer require vlakarados/eventure

## How

+ Create a class and extend `\Eventure\Dispatcher`

> Any public method in this class will be a registered event for the corresponding dispatcher.

> Two functions are used by the parent dispatcher class that may not be overriden (restricted event names): `dispatch()`, `hasEvent()`.

+ Inject the class instance in any other object across your project and use the `dispatch($eventName)` method to send the event. 

## Example

Examples are in the `example/` directory, the [ExampleDispatcher](example/ExampleDispatcher.php) and the [test bootstrap file](example/test.php)


## TODO

+ Callback dispatchers
+ Remove method restriction
