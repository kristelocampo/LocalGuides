<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/guide/dashboard' => [[['_route' => 'app_guide_dashboard', '_controller' => 'App\\Controller\\GuideController::dashboard'], null, null, null, false, false, null]],
        '/guide' => [[['_route' => 'app_guide_index', '_controller' => 'App\\Controller\\GuideController::index'], null, ['GET' => 0], null, true, false, null]],
        '/guide/new' => [[['_route' => 'app_guide_new', '_controller' => 'App\\Controller\\GuideController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/showarticles' => [[['_route' => 'app_articles', '_controller' => 'App\\Controller\\HomeController::articles'], null, null, null, false, false, null]],
        '/itinerary' => [[['_route' => 'app_itinerary', '_controller' => 'App\\Controller\\HomeController::iteneraries'], null, null, null, false, false, null]],
        '/itineraries' => [[['_route' => 'app_itineraries_index', '_controller' => 'App\\Controller\\ItinerariesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/itineraries/new' => [[['_route' => 'app_itineraries_new', '_controller' => 'App\\Controller\\ItinerariesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/language' => [[['_route' => 'app_language_index', '_controller' => 'App\\Controller\\LanguageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/language/new' => [[['_route' => 'app_language_new', '_controller' => 'App\\Controller\\LanguageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/location' => [[['_route' => 'app_location_index', '_controller' => 'App\\Controller\\LocationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/location/new' => [[['_route' => 'app_location_new', '_controller' => 'App\\Controller\\LocationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'app_verify', '_controller' => 'App\\Controller\\LoginController::index'], null, ['GET' => 0], null, false, false, null]],
        '/registration' => [[['_route' => 'app_register_user', '_controller' => 'App\\Controller\\RegistrationController::registerUser'], null, null, null, false, false, null]],
        '/register/guide' => [[['_route' => 'app_register_guide', '_controller' => 'App\\Controller\\RegistrationController::registerGuide'], null, null, null, false, false, null]],
        '/register/details' => [[['_route' => 'app_register_details', '_controller' => 'App\\Controller\\RegistrationController::registerDetails'], null, null, null, false, false, null]],
        '/review' => [[['_route' => 'app_review_index', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, true, false, null]],
        '/review/new' => [[['_route' => 'app_review_new', '_controller' => 'App\\Controller\\ReviewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/api/languages' => [
            [['_route' => 'api_languages_get', '_controller' => 'App\\Controller\\LanguageController::getLanguages'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_languages_post', '_controller' => 'App\\Controller\\LanguageController::addLanguage'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|locations(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:196)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:222)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:260)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|rticle/([^/]++)(?'
                        .'|(*:290)'
                        .'|/edit(*:303)'
                        .'|(*:311)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:349)'
                .'|/guide/(?'
                    .'|([^/]++)(?'
                        .'|(*:378)'
                        .'|/edit(*:391)'
                        .'|(*:399)'
                    .')'
                    .'|itineraries(*:419)'
                .')'
                .'|/show(?'
                    .'|Article/([^/]++)(*:452)'
                    .'|Itinerary/([^/]++)(*:478)'
                    .'|Guide/([^/]++)(*:500)'
                .')'
                .'|/itineraries/([^/]++)(?'
                    .'|(*:533)'
                    .'|/edit(*:546)'
                    .'|(*:554)'
                .')'
                .'|/l(?'
                    .'|anguage/([^/]++)(?'
                        .'|(*:587)'
                        .'|/edit(*:600)'
                        .'|(*:608)'
                    .')'
                    .'|ocation/([^/]++)(?'
                        .'|(*:636)'
                        .'|/edit(*:649)'
                        .'|(*:657)'
                    .')'
                .')'
                .'|/review/(?'
                    .'|new/([^/]++)(?'
                        .'|(*:693)'
                        .'|(*:701)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:721)'
                        .'|/edit(*:734)'
                        .'|(*:742)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:769)'
                    .'|/edit(*:782)'
                    .'|(*:790)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        196 => [[['_route' => '_api_/locations/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Location', '_api_operation_name' => '_api_/locations/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        222 => [
            [['_route' => '_api_/locations{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Location', '_api_operation_name' => '_api_/locations{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/locations{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Location', '_api_operation_name' => '_api_/locations{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        260 => [
            [['_route' => '_api_/locations/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Location', '_api_operation_name' => '_api_/locations/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/locations/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Location', '_api_operation_name' => '_api_/locations/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/locations/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Location', '_api_operation_name' => '_api_/locations/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        290 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        311 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        378 => [[['_route' => 'app_guide_show', '_controller' => 'App\\Controller\\GuideController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_guide_edit', '_controller' => 'App\\Controller\\GuideController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [[['_route' => 'app_guide_delete', '_controller' => 'App\\Controller\\GuideController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_itineraries_guide', '_controller' => 'App\\Controller\\GuideController::itineraries'], [], ['GET' => 0], null, false, false, null]],
        452 => [[['_route' => 'app_article_show_user', '_controller' => 'App\\Controller\\HomeController::showArticle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        478 => [[['_route' => 'app_itinerary_show_user', '_controller' => 'App\\Controller\\HomeController::showItineraries'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        500 => [[['_route' => 'app_guide_details', '_controller' => 'App\\Controller\\HomeController::showGuideDetails'], ['idGuide'], ['GET' => 0], null, false, true, null]],
        533 => [[['_route' => 'app_itineraries_show', '_controller' => 'App\\Controller\\ItinerariesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        546 => [[['_route' => 'app_itineraries_edit', '_controller' => 'App\\Controller\\ItinerariesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        554 => [[['_route' => 'app_itineraries_delete', '_controller' => 'App\\Controller\\ItinerariesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        587 => [[['_route' => 'app_language_show', '_controller' => 'App\\Controller\\LanguageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        600 => [[['_route' => 'app_language_edit', '_controller' => 'App\\Controller\\LanguageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        608 => [[['_route' => 'app_language_delete', '_controller' => 'App\\Controller\\LanguageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        636 => [[['_route' => 'app_location_show', '_controller' => 'App\\Controller\\LocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        649 => [[['_route' => 'app_location_edit', '_controller' => 'App\\Controller\\LocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        657 => [[['_route' => 'app_location_delete', '_controller' => 'App\\Controller\\LocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        693 => [[['_route' => 'app_review_itinerary', '_controller' => 'App\\Controller\\ReviewController::reviewItinerary'], ['itineraryId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        701 => [[['_route' => 'app_review_article', '_controller' => 'App\\Controller\\ReviewController::reviewArticle'], ['articleId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        721 => [[['_route' => 'app_review_show', '_controller' => 'App\\Controller\\ReviewController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        734 => [[['_route' => 'app_review_edit', '_controller' => 'App\\Controller\\ReviewController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        742 => [[['_route' => 'app_review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        769 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        782 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        790 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
