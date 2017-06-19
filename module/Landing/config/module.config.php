<?php

return array(
//    'controllers' => array(
//        'invokables' => array(
//            'Landing\Controller\Landing' => 'Landing\Controller\LandingController',
//            )
//        ),
//    'controllers' => array(
//        'factories' => array(
//            Controller\LandingController::class => InvokableFactory::class,
//        ),
//    ),
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'landing' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/umtik_2018[/:lang][/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                        'lang' => '((en)|(tr))',
                    ),
                    'defaults' => array(
                        'controller' => 'Landing\Controller\Landing',
                        'action' => 'index',
                        'lang' => 'en'
                    ),
                ),
            ),
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
//        'locale' => 'tr_TR',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'view_manager' => array(
        /* 'template_path_stack' => array(
          'admin' => __DIR__ . '/../view',
          ), */
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/landing.phtml',
            'landing/index/index' => __DIR__ . '/../view/landing/landing/index.phtml',
//         'error/404'               => __DIR__ . '/../view/error/404.phtml',
//          'error/index'             => __DIR__ . '/../view/error/index.phtml', 
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);

