<?php

namespace Eventure;

class Dispatcher
{
    private $injector;

    public function __construct(\Auryn\Injector $injector = null)
    {
        $this->injector = $injector;
    }

    final public function dispatch($originalEvent, $data = array())
    {
        // snake_case => camelCase
        $func = function ($c) {
            return strtoupper($c[1]);
        };
        $event = preg_replace_callback('/_([a-z])/', $func, $originalEvent);

        if (!$this->hasEvent($event)) {
            throw new \Eventure\NotFoundException('Event '.$event.' not found');
        }

        $arguments = array();
        foreach ($data as $key => $value) {
            $arguments[sprintf(':%s', $key)] = $value;
        }

        return $this->injector->execute(array($this, $event), $arguments);
    }

    final public function hasEvent($type)
    {
        return method_exists($this, $type);
    }
}
