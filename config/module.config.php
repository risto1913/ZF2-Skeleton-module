<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Twigly\Controller\TwiglyController' => 'Twigly\Controller\TwiglyController',
        ),
    ),
     'di' => array(
            'instance' => array(
                'ZfTwig\TwigEnvironment' => array(
                    'parameters' => array(
                        'options' => array(
                            'cache' => 'data/cache/twig',
                            'auto_reload' => false,
                            'debug' => true,
                            'cache' => 'compilation_cache'
                        )
                    )
                )
            )
        ),
    'router' => array(
        'routes' => array(
            'twigly' => array(
                'type'    => 'literal',
                'options' => array(
                    'route'    => '/twigly',
                    'defaults' => array(
                        'controller' => 'Twigly\Controller\TwiglyController',
                        'action'     => 'twigly',
                    ),
                ),

            ),
        ),
    ),



    'view_manager' => array(
	'template_map' => array(
            'layout/layout'    	   => __DIR__ . '/../view/layout/layout.twig',
            'index/main'        => __DIR__ . '/../view/twigly/index/main.twig',
            'index/mobile'        => __DIR__ . '/../view/twigly/index/mobile.twig',
	),

    ),

);
