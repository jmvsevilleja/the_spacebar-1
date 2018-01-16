<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 16/01/2018
 * Time: 18:48
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug )
    {
        return $this->render('index.twig', [
            'title' => "JOE!!"
        ]);
    }

}