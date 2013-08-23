<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Twigly\Controller\Twigly' => 'Twigly\Controller\TwiglyController',
        ),
    ),
    
    'router' => array(
        'routes' => array(
            'twigly' => array(
                'type'    => 'literal',
                'options' => array(
                    'route'    => '/twigly',
                    'defaults' => array(
                        'controller' => 'Twigly\Controller\Twigly',
                        'action'     => 'index',
                    ),

                ),

            ),
        ),
    ),

    /*
    'module_layouts' => array(
        'Twigly' => 'layout/twigly.twig',
    ),
    */


    'view_manager' => array(
        'template_map' => array(
            'layout/layout'    	   => __DIR__ . '/../view/layout/layout.twig',
            'index/main'        => __DIR__ . '/../view/twigly/index/main.twig',
            'index/mobile'        => __DIR__ . '/../view/twigly/index/mobile.twig',
            ),
        'template_path_stack' => array(
            'twigly' => __DIR__ . '/../view',
        ),
    ),
);