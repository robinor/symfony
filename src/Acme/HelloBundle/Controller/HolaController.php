<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HolaController
{
  public function indexAction($name)
  {
    return new Response('<html><body>Hola '.$name.'!</body></html>');
  } 
}
