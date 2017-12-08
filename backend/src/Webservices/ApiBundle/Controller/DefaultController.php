<?php

namespace Webservices\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Webservices\ApiBundle\Entity\Currency;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebservicesApiBundle:Default:index.html.twig');
    }

    public function convertAction($initialCurrencyCode, $targetCurrencyCode, $amount)
    {

        $em = $this->getDoctrine();

        $convertedAmount = $em
            ->getRepository(Currency::class)
            ->getConvertedAmount($initialCurrencyCode, $targetCurrencyCode, $amount);

//        // Test json :
//        $response = new JsonResponse();
//        $response->setData(json_encode($convertedAmount));
//        $response->headers->set('Content-Type', 'application/json');

        $response = new Response(
            $convertedAmount,
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );

        return $response;
    }
}
