<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

return array(
    'router' => array(
        'routes' => array(

            'root' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'PictureController',
                        'action'     => 'index',
                    ),
                ),
            ),

            'get-all-pictures' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/get/pictures',
                    'defaults' => array(
                        'controller' => 'PictureController',
                        'action'     => 'get-all-pictures',
                    ),
                ),
            ),

            'get-all-pictures-range' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/get/pictures/',
                    'defaults' => array(
                        'controller' => 'PictureController',
                        'action'     => 'get-pictures-range',
                    ),
                ),
            ),

            'get-comments' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/get/comments',
                    'defaults' => array(
                        'controller' => 'CommentController',
                        'action'     => 'get-all-comments',
                    ),
                ),
            ),

            'search-pictures' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/search',
                    'defaults' => array(
                        'controller' => 'PictureController',
                        'action'     => 'search',
                    ),
                ),
            ),

            'login' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/authorize',
                    'defaults' => array(
                        'controller' => 'InstagramController',
                        'action'     => 'authorize',
                    ),
                ),
            ),

            'import'   => array (
                'type'  => 'literal',
                'options'   => array (
                    'route' => '/import',
                    'defaults'  => array (
                        'controller'    => 'InstagramController',
                        'action'    =>  'import',
                    ),
                ),
            ),

        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'PictureController' => Controller\PictureController::class,
            'CommentController' => Controller\CommentController::class,
            'InstagramController' => Controller\InstagramController::class,
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => false,
        'display_exceptions'       => false,
        'strategies' => array(
            'ViewJsonStrategy'
        ),
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/picture/index' => __DIR__ . '/../view/application/index/index.phtml',
        ),
    ),
);
