<?php
namespace Twigly\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\XmlRpc\Client;

class TwiglyController extends AbstractActionController
{
    public function indexAction()
    {   
        /*
        echo "go...";
        return array('data'=> \Zend\Version\Version::VERSION);
        $view=new ViewModel();
        //$view->set('title', 'Clubs');
        return $view;
        return new ViewModel(array(
            'data' => array("data"=>"test2"),
              
       ));
        */
       return new ViewModel(array(
            'data' => array("data"=>"test2"),
              
       ));
    }

}
