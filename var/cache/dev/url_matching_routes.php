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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/activite' => [[['_route' => 'app_activite_index', '_controller' => 'App\\Controller\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activite/new' => [[['_route' => 'app_activite_new', '_controller' => 'App\\Controller\\ActiviteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activite/Show_activite_front' => [[['_route' => 'Show_activite_front', '_controller' => 'App\\Controller\\ActiviteController::Show_activitefront'], null, null, null, false, false, null]],
        '/activite/Show_activite' => [[['_route' => 'Show_activite', '_controller' => 'App\\Controller\\ActiviteController::Show_activite'], null, null, null, false, false, null]],
        '/salle' => [[['_route' => 'app_salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/salle/chercher_salle' => [[['_route' => 'chercher_salle', '_controller' => 'App\\Controller\\SalleController::chercher_student'], null, null, null, false, false, null]],
        '/salle/new' => [[['_route' => 'app_salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Show_salle_front' => [[['_route' => 'Show_salle_front', '_controller' => 'App\\Controller\\TraitementController::Show_salle_front'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\TraitementController::index'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\TraitementController::index_front'], null, null, null, false, false, null]],
        '/form' => [[['_route' => 'form', '_controller' => 'App\\Controller\\TraitementController::form_display'], null, null, null, false, false, null]],
        '/chart' => [[['_route' => 'chart', '_controller' => 'App\\Controller\\TraitementController::chart'], null, null, null, false, false, null]],
        '/gofront' => [[['_route' => 'go_front', '_controller' => 'App\\Controller\\TraitementController::gofront'], null, null, null, false, false, null]],
        '/gobutton' => [[['_route' => 'go_button', '_controller' => 'App\\Controller\\TraitementController::gobutton'], null, null, null, false, false, null]],
        '/showactiviteinfront' => [[['_route' => 'show_activite_infront', '_controller' => 'App\\Controller\\TraitementController::showSalleinfront'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'service', '_controller' => 'App\\Controller\\TraitementController::Show_activitefront'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/activite(?'
                    .'|show/([^/]++)(*:194)'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:222)'
                            .'|(*:230)'
                        .')'
                        .'|find_Salle(*:249)'
                    .')'
                .')'
                .'|/salle/(?'
                    .'|([^/]++)(?'
                        .'|(*:280)'
                        .'|/edit(*:293)'
                        .'|(*:301)'
                    .')'
                    .'|Show_salle(*:320)'
                    .'|delete/([^/]++)(*:343)'
                    .'|find_Salle(*:361)'
                    .'|a(?'
                        .'|ddnew(*:378)'
                        .'|jouter_salle(*:398)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'app_activite_show', '_controller' => 'App\\Controller\\ActiviteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => 'app_activite_edit', '_controller' => 'App\\Controller\\ActiviteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        230 => [[['_route' => 'app_activite_delete', '_controller' => 'App\\Controller\\ActiviteController::removeStudent'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'find_acti', '_controller' => 'App\\Controller\\ActiviteController::findSalle'], [], null, null, false, false, null]],
        280 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        301 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        320 => [[['_route' => 'Show_salle', '_controller' => 'App\\Controller\\SalleController::showstudent'], [], null, null, false, false, null]],
        343 => [[['_route' => 'deleteevent', '_controller' => 'App\\Controller\\SalleController::deleteevent'], ['id'], null, null, false, true, null]],
        361 => [[['_route' => 'find_Salle', '_controller' => 'App\\Controller\\SalleController::findSalle'], [], null, null, false, false, null]],
        378 => [[['_route' => 'addnew_salle', '_controller' => 'App\\Controller\\SalleController::addnewsalle'], [], null, null, false, false, null]],
        398 => [
            [['_route' => 'app_salle', '_controller' => 'App\\Controller\\SalleController::ajouter_salle'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
