<?php
  namespace AppBundle\Controller;

  use Symfony\Component\HttpFoundation\Response;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

  class HelloController
  {
    /**
    * @Route("/hello/{firstName}/{lastName}", name="hello")
    */
    public function indexAction($firstName)
    {
      return new Response('<html><body>Hello '.$firstName.'!</body></html>'); }
    }
?>
