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
        $em = $this->getDoctrine();

        $list = $em
            ->getRepository(Currency::class)
            ->getCurrencyList();

        $serializer = $this->container->get('jms_serializer');
        $jsonContent = $serializer->serialize($list, 'json');

        $response = new JsonResponse();
        $response->setJson($jsonContent);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function convertAction($initialCurrencyCode, $targetCurrencyCode, $amount)
    {

        $em = $this->getDoctrine();

        $convertedAmount = $em
            ->getRepository(Currency::class)
            ->getConvertedAmount($initialCurrencyCode, $targetCurrencyCode, $amount);

        $response = new Response(
            $convertedAmount,
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );

        return $response;
    }
}
