<?php

namespace Twigly\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Application;
use Application\Form\ApplicationForm;


class TwiglyController extends AbstractActionController
{

    public function indexAction()
    {   
        echo "index...";
        /*
        return array('data'=> \Zend\Version\Version::VERSION);
        $view=new ViewModel();
        //$view->set('title', 'Clubs');
        return $view;
        return new ViewModel(array(
            'data' => array("data"=>"test2"),
              
       ));
       */
       $viewModel= new ViewModel(array(
            'data' => array("data"=>"test2"),
              
       ));
       $viewModel->setTerminal("true");
       return $viewModel;
       
    }

}
