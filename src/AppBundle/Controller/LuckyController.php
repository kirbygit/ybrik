<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController
{

    /**
     * @Route("/lucky/number")
     */
     public function numberAction($count) {
       $numbers = array();
       for ($i = 0; $i < $count; $i++) {
         $numbers[] = rand(0, 100);
       }
       $numbersList = implode(', ', $numbers);

       return new Response(
         '<html><body>Lucky numbers: '.$numbersList.'</body></html>'
       );
     }
    /**
     *@Route("/api/lucky/number")
     */
    public function apiNumberAction()
    {
        $data = array(
          'lucky_number' => rand(0, 100),
        );

        // calls json_encode() and sets the Content-Type header
        return new JsonResponse($data);
    }
}
