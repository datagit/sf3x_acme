<?php
/**
 * Created by PhpStorm.
 * User: daomanhdat
 * Date: 12/1/17
 * Time: 3:32 PM
 */

namespace Mcc\DataSourceBundle\DataFixtures\ORM;


use Mcc\DataSourceBundle\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product->setName('product '.$i);
            $product->setPrice(mt_rand(10, 100));
            $product->setDescription('category xx '.$i);
            $manager->persist($product);
        }

        $manager->flush();
    }
}