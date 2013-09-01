<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Twigly\Controller\TwiglyController' => 'Twigly\Controller\TwiglyController',
        ),
    ),
    
    'router' => array(
        'routes' => array(
            'twigly' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/twigly[/:page]',
                    'defaults' => array(
                        'controller' => 'Twigly\Controller\TwiglyController',
                        'action'     => 'index',
                    ),

                ),

            ),
        ),
    ),

'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404.tpl',
        'exception_template'       => 'error/index.tpl',
        'template_map' => array(
            'twigly/twigly/index'           => __DIR__ . '/../view/layout/layout.tpl',
            'twigly/main'        => __DIR__ . '/../view/twigly/index/main.tpl',
            'index/twigly'        => __DIR__ . '/../view/twigly/index/mobile.tpl',

        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);
