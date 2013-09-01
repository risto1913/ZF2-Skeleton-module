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
                    'route'    => '.tplly',
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
        'Twigly' => 'layout.tplly.tpl',
    ),
    */


    'view_manager' => array(
        'template_map' => array(
            'layout/layout'    	   => __DIR__ . '/../view/layout/layout.tpl',
            'index/main'        => __DIR__ . '/../view.tplly/index/main.tpl',
            'index/mobile'        => __DIR__ . '/../view.tplly/index/mobile.tpl',
            ),
        'template_path_stack' => array(
            'twigly' => __DIR__ . '/../view',
        ),
    ),
);
