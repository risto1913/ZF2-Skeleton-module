<?php
namespace Twigly\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\XmlRpc\Client;



class TwiglyController extends AbstractActionController
{
    public function indexAction()
    {	



    }

     public function wiperAction()
    {   
        echo "wiperAction";
// return array('version'=> \Zend\Version\Version::VERSION);

        return new ViewModel(array(
            'data' => array("test"=>"test2"),
            'data' => array("test"=>"test2"),
              
       ));

    }

}
