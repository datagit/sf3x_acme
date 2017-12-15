<?php

namespace Mcc\DemoBundle\Controller;

use Mcc\DataSourceBundle\Entity\Post;
use Mcc\DataSourceBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class DefaultController extends Controller
{
    /**
     * @Route("/demo")
     */
    public function indexAction()
    {

die;
        $client = new \GuzzleHttp\Client();


die;
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
die;
        $request = new \GuzzleHttp\Psr7\Request('POST'
            , 'http://127.0.0.1:8000/api/posts'
            , [
                'content-type' => 'application/jon'
            ]
            , $form
        );

die;
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo "I completed!  \n\n" . $response->getBody();
        });
        $promise->wait();

        echo "\n\n\n";


        die;
        return $this->render('MccDemoBundle:Default:index.html.twig');
    }
}
