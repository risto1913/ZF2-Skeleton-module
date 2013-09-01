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
       
        $layout = $this->layout();
        $layout->setTemplate('twigly/twigly/index');

        // Create and return a view model for the retrieved article
        $view = new ViewModel(array('data' => $this->params()->fromRoute('page')));
        //$view->setTemplate('twigly/twigly/index');
        return $view;
       
    }

}
