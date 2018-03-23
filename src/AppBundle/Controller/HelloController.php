<?php
  namespace AppBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Response;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Symfony\Component\HttpFoundation\Request;

  /**
    * @Route("/hello/{firstName}/{lastName}", name="hello")
    */
  class HelloController extends Controller
  {
    public function indexAction(Request $request)
    {
      $session = $request->getSession();

      // store an attribute for reuse during a later user request
      $session->set('foo', 'bar');

      // get the attribute set by another controller in another request
      $foobar = $session->get('foobar');

      // use a default value if the attribute doesn't exist
      $filters = $session->get('filters', array());
    }
  }
?>
