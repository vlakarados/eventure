<?php

class ExampleDispatcher extends \Eventure\Dispatcher
{
    public function foo()
    {
        echo 'bar'.PHP_EOL;
    }

    public function userCreated($userId)
    {
        echo 'User #'.$userId.' was created'.PHP_EOL;
    }

    public function userAction($userId, $action)
    {
        echo 'User #'.$userId.' has performed "'.$action.'"'.PHP_EOL;
    }

    public function userDelete($userId, \UserRepository $userRepository)
    {
        $userRepository->delete($userId);
    }
}
