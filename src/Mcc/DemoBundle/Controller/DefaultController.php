<?php

namespace Mcc\DemoBundle\Controller;

use Mcc\DataSourceBundle\Entity\Post;
use Mcc\DataSourceBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/demo")
     */
    public function indexAction()
    {

        $client = new \GuzzleHttp\Client();


        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

//        $res = $client->request('GET', 'http://127.0.0.1:8000/api/posts');
//        echo $res->getStatusCode();
// 200


        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        echo $res->getStatusCode();

        echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
        echo $res->getBody();


//        $promise = $client->sendAsync($request)->then(function ($response) {
//            echo "I completed!  \n\n" . $response->getBody();
//        });
//        $promise->wait();

        //echo "I completed!  \n\n" . $res->getBody();

        echo "\n\n\n";


        die;
        return $this->render('MccDemoBundle:Default:index.html.twig');
    }

    /**
     * @Route("/form")
     */
    public function formAction(Request $request)
    {

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

//            return $this->redirectToRoute('admin_post_show', [
//                'id' => $post->getId()
//            ]);

            return $this->render('MccDemoBundle:Default:index.html.twig', array('form' => $form->createView()));
        }

        return $this->render('MccDemoBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

}
