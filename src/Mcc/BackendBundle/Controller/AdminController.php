<?php

namespace Mcc\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends BaseAdminController
{

//    protected function initialize(Request $request)
//    {
//        $this->get('translator')->setLocale('en');
//        parent::initialize($request);
//    }

    public function createNewUserEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function prePersistUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    public function preUpdateUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }


    public function preUpdateEntity($command)
    {
        if (method_exists($command, 'setUpdatedAt')) {
            $command->setUpdatedAt(new \DateTime());
        }
    }

    /** @Route("/abc", name="easyadmin_abc") */
    public function indexAbcAction(Request $request)
    {
        // you can override this method to perform additional checks and to
        // perform more complex logic before redirecting to the other methods
        return $this->render('MccBackendBundle:Default:index.html.twig');
    }

}
