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
      // is it an Ajax request?
      $request->isXmlHttpRequest();
      $request->getPreferredLanguage(array('en', 'fr'));

      // retrieve GET and POST variables respectively
      $request->query->get('page');
      $request->request->get('page');

      // retrieve SERVER variables
      $request->server->get('HTTP_HOST');

      // retrieves an instance of UploadedFile indentified by foo
      $request->files->get('foo');

      // retrieve a COOKIE value
      $request->cookies->get('PHPSESSID');

      // retrieve an HTTP request header, with normalized, lowercase keys
    }

    public function updateAction(Request $request)
    {
      $form = $this->createForm('Sample Form');
      $form->handleRequest($request);
      if ($form->isValid()) {
        // do some sort of processing

        $this->addFlash(
          'notice',
          'Your changes were saved!'
        );
        // $this->addFlash is equivalent to $this->get('session')->getFlashBag()->add

        return $this->redirectToRoute('Route');
      }
      return $this->render($form);
    }
  }
?>
