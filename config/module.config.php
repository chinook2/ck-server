<?php
return array(
    'controllers' => array(
        'factories' => array(
            'Chinook\\V1\\Rpc\\About\\Controller' => 'Chinook\\V1\\Rpc\\About\\AboutControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'chinook.rpc.about' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/about',
                    'defaults' => array(
                        'controller' => 'Chinook\\V1\\Rpc\\About\\Controller',
                        'action' => 'about',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'chinook.rpc.about',
        ),
    ),
    'zf-rpc' => array(
        'Chinook\\V1\\Rpc\\About\\Controller' => array(
            'service_name' => 'about',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'chinook.rpc.about',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Chinook\\V1\\Rpc\\About\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'Chinook\\V1\\Rpc\\About\\Controller' => array(
                0 => 'application/vnd.chinook.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'Chinook\\V1\\Rpc\\About\\Controller' => array(
                0 => 'application/vnd.chinook.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
);
