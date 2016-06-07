# eventure
Auryn based events

## What

A very small library to work with simple events.

## Install

    composer require vlakarados/eventure

## How

Create a class and extend `\Eventure\Dispatcher`

Any public method in this class will be a registered event for the corresponding dispatcher.

Two functions are used by the parent dispatcher class that may not be overriden (event names should differ): `dispatch()`, `hasEvent()`

## Example

Examples are in the `example/` directory, the [ExampleDispatcher](example/ExampleDispatcher.php) and the [test bootstrap file](example/test.php)


No static calls. 
