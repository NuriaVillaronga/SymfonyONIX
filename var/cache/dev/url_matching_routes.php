<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\CreateController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'user_homepage', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\ListController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/create/catalog/([^/]++)(*:192)'
                .'|/delete/([^/]++)(?'
                    .'|(*:219)'
                    .'|/catalog/([^/]++)(?'
                        .'|(*:247)'
                        .'|/file/([^/]++)/product/([^/]++)(*:286)'
                    .')'
                .')'
                .'|/up(?'
                    .'|date/(?'
                        .'|([^/]++)(*:318)'
                        .'|product/([^/]++)/user/([^/]++)/catalog/([^/]++)(*:373)'
                    .')'
                    .'|load/([^/]++)/catalog/([^/]++)(*:412)'
                .')'
                .'|/view/([^/]++)/catalog(?'
                    .'|s(*:447)'
                    .'|/([^/]++)/products(*:473)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        192 => [[['_route' => 'create_catalog', '_controller' => 'App\\Controller\\CreateCatalogController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        219 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\DeleteController::deleteUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        247 => [[['_route' => 'delete_catalog', '_controller' => 'App\\Controller\\DeleteController::deleteCatalog'], ['user_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        286 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\DeleteController::deleteProduct'], ['id_user', 'id_catalog', 'id_file', 'id_product'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        318 => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\UpdateController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        373 => [[['_route' => 'update_product', '_controller' => 'App\\Controller\\UpdateProductController::index'], ['id_product', 'id_user', 'id_catalog'], null, null, false, true, null]],
        412 => [[['_route' => 'upload_onix', '_controller' => 'App\\Controller\\UploadFileController::index'], ['id_user', 'id_catalog'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        447 => [[['_route' => 'view_catalog', '_controller' => 'App\\Controller\\ViewCatalogController::view'], ['user_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        473 => [
            [['_route' => 'view_product', '_controller' => 'App\\Controller\\ViewProductsController::viewFile'], ['id_user', 'id_catalog'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
