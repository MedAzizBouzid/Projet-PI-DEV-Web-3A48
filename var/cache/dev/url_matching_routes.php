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
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/delete' => [[['_route' => 'app_cart_delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null]],
        '/addPanier' => [[['_route' => 'app_panier_add', '_controller' => 'App\\Controller\\CartController::addPanier'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\CartController::panierShow'], null, null, null, false, false, null]],
        '/categorie/show/back' => [[['_route' => 'app_categorie_index_back', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/show/back' => [[['_route' => 'app_produit_index_back', '_controller' => 'App\\Controller\\ProduitController::AffichageBack'], null, ['GET' => 0], null, false, false, null]],
        '/produit/show/front' => [[['_route' => 'app_produit_index_front', '_controller' => 'App\\Controller\\ProduitController::AffichageFront'], null, ['GET' => 0], null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\TraitementController::index'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\TraitementController::index_front'], null, null, null, false, false, null]],
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
                .'|/test/([^/]++)(*:183)'
                .'|/update/([^/]++)(*:207)'
                .'|/add/([^/]++)(*:228)'
                .'|/remove/([^/]++)(*:252)'
                .'|/delete(?'
                    .'|/([^/]++)(*:279)'
                    .'|Panier/([^/]++)(*:302)'
                .')'
                .'|/c(?'
                    .'|ategorie/(?'
                        .'|([^/]++)(?'
                            .'|(*:339)'
                            .'|/edit(*:352)'
                        .')'
                        .'|delete/([^/]++)(*:376)'
                    .')'
                    .'|ommande/([^/]++)(?'
                        .'|(*:404)'
                        .'|/(?'
                            .'|edit(*:420)'
                            .'|pdf(*:431)'
                        .')'
                        .'|(*:440)'
                    .')'
                .')'
                .'|/produit/([^/]++)(?'
                    .'|(*:470)'
                    .'|/edit(*:483)'
                    .'|(*:491)'
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
        183 => [[['_route' => 'app_cart_test', '_controller' => 'App\\Controller\\CartController::test'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'app_cart_update', '_controller' => 'App\\Controller\\CartController::update'], ['id'], null, null, false, true, null]],
        228 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'app_cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\CartController::deletePanier'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        376 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        404 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        420 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [[['_route' => 'app_commande_pdf', '_controller' => 'App\\Controller\\CommandeController::generatePdfAction'], ['id'], null, null, false, false, null]],
        440 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        470 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        483 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        491 => [
            [['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
