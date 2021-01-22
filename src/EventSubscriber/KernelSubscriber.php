<?php

namespace App\EventSubscriber;


use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class KernelSubscriber implements EventSubscriberInterface
{

public static function getSubscribedEvents()
{

    return[
        KernelEvents::EXCEPTION =>[
             ['showErrorMessage' , 10]
    ]
        ];
}

public function showErrorMessage()
{

   dump('something is wrong');

}


}

















?>