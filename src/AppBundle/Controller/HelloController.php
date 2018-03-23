<?php
  namespace AppBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Response;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

  class HelloController extends Controller
  {
    public function indexAction()
    {
      // retrieve the object from database
      $product = 'Product';
      if (!$product) {
        throw $this->createNotFoundException('The product does not exist');
      }
      return $this->render($product);
    }
  }
?>
