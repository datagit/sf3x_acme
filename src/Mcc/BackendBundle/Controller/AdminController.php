<?php

namespace Mcc\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;


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
}
