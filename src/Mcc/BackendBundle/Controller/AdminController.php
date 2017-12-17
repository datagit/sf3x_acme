<?php

namespace Mcc\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\HttpFoundation\Request;
use Ob\HighchartsBundle\Highcharts\Highchart;


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
    public function chartAction()
    {
        // Chart
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text'  => "Horizontal axis title"));
        $ob->yAxis->title(array('text'  => "Vertical axis title"));
        $ob->series($series);

        //Pie
        $ob2 = new Highchart();
        $ob2->chart->renderTo('piechart');
        $ob2->title->text('Browser market shares at a specific website in 2010');
        $ob2->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));
        $data = array(
            array('Firefox', 45.0),
            array('IE', 26.8),
            array('Chrome', 12.8),
            array('Safari', 8.5),
            array('Opera', 6.2),
            array('Others', 0.7),
        );
        $ob2->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));


        return $this->render('MccBackendBundle:Default:index.html.twig', array(
            'chart' => $ob,
            'chart2' => $ob2,
        ));
    }

}
