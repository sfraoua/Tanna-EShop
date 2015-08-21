<?php
/**
 *
 * @author Selim Fraoua <sfraoua@gmail.com>
 */

namespace AppBundle\Listener;


use Symfony\Component\HttpFoundation\Response;
use Tanna\ProductBundle\Event\GetResponseProductEvent;

class TestListener
{
    public function doStuff(GetResponseProductEvent $event)
    {
       // $event->getProduct()->setName('edited-in-lsitener');
    }
}