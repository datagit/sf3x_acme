<?php

namespace Mcc\DataSourceBundle\Controller;

use Mcc\BackendBundle\Form\Type\CustomerType;
use Mcc\DataSourceBundle\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $container = $this->container;
        $faker = $container->get('davidbadura_faker.faker');
        // generate data by accessing properties
        echo "name-------------<br/>";
        echo $faker->name;
        echo "-------------<br/>";
        // 'Lucy Cechtelar';
        echo "address-------------<br/>";
        echo $faker->address;
        echo "-------------<br/>";
        // "426 Jordy Lodge
        // Cartwrightshire, SC 88120-6700"
        echo "text-------------<br/>";
        echo $faker->text;
        echo "-------------<br/>";
        // Sint velit eveniet. Rerum atque repellat voluptatem quia rerum. Numquam excepturi
        // beatae sint laudantium consequatur. Magni occaecati itaque sint et sit tempore. Nesciunt
        // amet quidem. Iusto deleniti cum autem ad quia aperiam.
        // A consectetur quos aliquam. In iste aliquid et aut similique suscipit. Consequatur qui
        // quaerat iste minus hic expedita. Consequuntur error magni et laboriosam. Aut aspernatur
        // voluptatem sit aliquam. Dolores voluptatum est.
        // Aut molestias et maxime. Fugit autem facilis quos vero. Eius quibusdam possimus est.
        // Ea quaerat et quisquam. Deleniti sunt quam. Adipisci consequatur id in occaecati.
        // Et sint et. Ut ducimus quod nemo ab voluptatum.

        return $this->render('MccDataSourceBundle:Default:index.html.twig');
    }
}
