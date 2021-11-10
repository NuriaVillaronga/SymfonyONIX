<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\CreateController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'user_homepage', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\ListController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/delete/([^/]++)(?'
                    .'|(*:26)'
                    .'|/([^/]++)(*:42)'
                .')'
                .'|/up(?'
                    .'|date/([^/]++)(*:69)'
                    .'|load/([^/]++)(*:89)'
                .')'
                .'|/view/([^/]++)(*:111)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\DeleteController::deleteUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        42 => [[['_route' => 'deleteFiles', '_controller' => 'App\\Controller\\DeleteController::deleteFiles'], ['user_id', 'files_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        69 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\UpdateController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        89 => [[['_route' => 'upload_onix', '_controller' => 'App\\Controller\\UploadFileController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        111 => [
            [['_route' => 'view_file', '_controller' => 'App\\Controller\\ViewFileController::view'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
