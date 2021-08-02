<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'homepage', 'path' => '/tr', 'permanent' => true, 'keepQueryParams' => true, 'keepRequestMethod' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null]],
        '/tr/api/login_check' => [[['_route' => 'login_check', 'path' => '/api/login_check', 'permanent' => true, 'keepQueryParams' => true, 'keepRequestMethod' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/(tr)(?'
                    .'|(*:15)'
                    .'|/(?'
                        .'|a(?'
                            .'|pi(?'
                                .'|/mobil\\-function/(?'
                                    .'|test(*:59)'
                                    .'|get\\-ip\\-address(*:82)'
                                    .'|register(*:97)'
                                    .'|c(?'
                                        .'|hange\\-password(*:123)'
                                        .'|reate\\-order(*:143)'
                                    .')'
                                .')'
                                .'|(?:/(index)(?:\\.([^/]++))?)?(*:181)'
                                .'|/(?'
                                    .'|docs(?:\\.([^/]++))?(*:212)'
                                    .'|graphql(?'
                                        .'|(*:230)'
                                        .'|/graph(?'
                                            .'|iql(*:250)'
                                            .'|ql_playground(*:271)'
                                        .')'
                                    .')'
                                    .'|contexts/(.+)(?:\\.([^/]++))?(*:309)'
                                    .'|user(?'
                                        .'|_profiles(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:354)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:392)'
                                            .')'
                                        .')'
                                        .'|s(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:424)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:462)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|log_users(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:503)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:541)'
                                        .')'
                                    .')'
                                    .'|products(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:580)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:618)'
                                        .')'
                                    .')'
                                    .'|orders(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:655)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:693)'
                                        .')'
                                    .')'
                                    .'|roles(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:729)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:767)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|dmin(?'
                                .'|(*:786)'
                                .'|/(?'
                                    .'|order(?'
                                        .'|(*:806)'
                                        .'|/(?'
                                            .'|new(*:821)'
                                            .'|([^/]++)(?'
                                                .'|(*:840)'
                                                .'|/edit(*:853)'
                                                .'|(*:861)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|product(?'
                                        .'|(*:882)'
                                        .'|/(?'
                                            .'|new(*:897)'
                                            .'|([^/]++)(?'
                                                .'|(*:916)'
                                                .'|/edit(*:929)'
                                                .'|(*:937)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|test22(*:957)'
                        .'|js/routing(?:\\.(js|json))?(*:991)'
                        .'|media/cache/resolve/(?'
                            .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:1052)'
                            .'|([A-z0-9_-]*)/(.+)(*:1079)'
                        .')'
                        .'|sg/datatables/edit/field(*:1113)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(?'
                        .'|(*:1158)'
                    .')'
                    .'|wdt/([^/]++)(*:1180)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1227)'
                            .'|router(*:1242)'
                            .'|exception(?'
                                .'|(*:1263)'
                                .'|\\.css(*:1277)'
                            .')'
                        .')'
                        .'|(*:1288)'
                    .')'
                .')'
                .'|/(tr)/a(?'
                    .'|dmin/(?'
                        .'|log(?'
                            .'|in(?'
                                .'|(*:1328)'
                                .'|_check(*:1343)'
                            .')'
                            .'|out(*:1356)'
                        .')'
                        .'|profile(?'
                            .'|(*:1376)'
                            .'|/(?'
                                .'|edit(*:1393)'
                                .'|change\\-password(*:1418)'
                            .')'
                        .')'
                        .'|re(?'
                            .'|gister(?'
                                .'|(*:1443)'
                                .'|/c(?'
                                    .'|heck\\-email(*:1468)'
                                    .'|onfirm(?'
                                        .'|/([^/]++)(*:1495)'
                                        .'|ed(*:1506)'
                                    .')'
                                .')'
                            .')'
                            .'|setting/(?'
                                .'|re(?'
                                    .'|quest(*:1539)'
                                    .'|set/([^/]++)(*:1560)'
                                .')'
                                .'|send\\-email(*:1581)'
                                .'|check\\-email(*:1602)'
                            .')'
                        .')'
                    .')'
                    .'|pi(*:1616)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        15 => [
            [['_route' => 'batman', '_controller' => 'App\\Controller\\BatmanController::index'], ['_locale'], null, null, true, true, null],
            [['_route' => 'home_page_action', '_controller' => 'App\\Controller\\Front\\HomePageController::homePageAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, true, null],
        ],
        59 => [[['_route' => 'mobil_test', '_controller' => 'App\\Controller\\Front\\MobilFunctionController::test'], ['_locale'], ['POST' => 0], null, false, false, null]],
        82 => [[['_route' => 'mobil_get_ip_address', '_controller' => 'App\\Controller\\Front\\MobilFunctionController::getIpAddress'], ['_locale'], ['GET' => 0], null, false, false, null]],
        97 => [[['_route' => 'mobil_mobil_register', '_controller' => 'App\\Controller\\Front\\MobilFunctionController::register'], ['_locale'], ['POST' => 0], null, false, false, null]],
        123 => [[['_route' => 'mobil_mobil_change_password', '_controller' => 'App\\Controller\\Front\\MobilFunctionController::changePassword'], ['_locale'], ['POST' => 0], null, false, false, null]],
        143 => [[['_route' => 'mobil_create_order', '_controller' => 'App\\Controller\\Front\\MobilFunctionController::createOrder'], ['_locale'], ['POST' => 0], null, false, false, null]],
        181 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['_locale', 'index', '_format'], null, null, false, true, null]],
        212 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_locale', '_format'], null, null, false, true, null]],
        230 => [[['_route' => 'api_graphql_entrypoint', '_controller' => 'api_platform.graphql.action.entrypoint', '_graphql' => true], ['_locale'], null, null, false, false, null]],
        250 => [[['_route' => 'api_graphql_graphiql', '_controller' => 'api_platform.graphql.action.graphiql', '_graphql' => true], ['_locale'], null, null, false, false, null]],
        271 => [[['_route' => 'api_graphql_graphql_playground', '_controller' => 'api_platform.graphql.action.graphql_playground', '_graphql' => true], ['_locale'], null, null, false, false, null]],
        309 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['_locale', 'shortName', '_format'], null, null, false, true, null]],
        354 => [
            [['_route' => 'api_user_profiles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_locale', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_profiles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_locale', '_format'], ['POST' => 0], null, false, true, null],
        ],
        392 => [
            [['_route' => 'api_user_profiles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['_locale', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_profiles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['_locale', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_user_profiles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\UserProfile', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['_locale', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        424 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_locale', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_locale', '_format'], ['POST' => 0], null, false, true, null],
        ],
        462 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['_locale', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['_locale', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['_locale', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        503 => [
            [['_route' => 'api_log_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LogEntity\\LogUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_locale', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_log_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LogEntity\\LogUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_locale', '_format'], ['POST' => 0], null, false, true, null],
        ],
        541 => [
            [['_route' => 'api_log_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LogEntity\\LogUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['_locale', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_log_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LogEntity\\LogUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['_locale', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_log_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LogEntity\\LogUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['_locale', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        580 => [
            [['_route' => 'api_products_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_locale', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_locale', '_format'], ['POST' => 0], null, false, true, null],
        ],
        618 => [
            [['_route' => 'api_products_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['_locale', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['_locale', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_products_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['_locale', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        655 => [
            [['_route' => 'api_orders_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_locale', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_orders_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_locale', '_format'], ['POST' => 0], null, false, true, null],
        ],
        693 => [
            [['_route' => 'api_orders_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['_locale', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_orders_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['_locale', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_orders_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['_locale', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        729 => [
            [['_route' => 'api_roles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_locale', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_roles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_locale', '_format'], ['POST' => 0], null, false, true, null],
        ],
        767 => [
            [['_route' => 'api_roles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['_locale', 'id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_roles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['_locale', 'id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_roles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['_locale', 'id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        786 => [[['_route' => 'admin_home_page', '_controller' => 'App\\Controller\\Admin\\AdminHomePageController::adminHomePage'], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        806 => [[['_route' => 'order_index', '_controller' => 'App\\Controller\\Admin\\OrderController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        821 => [[['_route' => 'order_new', '_controller' => 'App\\Controller\\Admin\\OrderController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        840 => [[['_route' => 'order_show', '_controller' => 'App\\Controller\\Admin\\OrderController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        853 => [[['_route' => 'order_edit', '_controller' => 'App\\Controller\\Admin\\OrderController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        861 => [[['_route' => 'order_delete', '_controller' => 'App\\Controller\\Admin\\OrderController::delete'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        882 => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        897 => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        916 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        929 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        937 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        957 => [[['_route' => 'test222', '_controller' => 'App\\Controller\\Front\\TestController::index'], ['_locale'], null, null, false, false, null]],
        991 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller:indexAction', '_format' => 'js'], ['_locale', '_format'], ['GET' => 0], null, false, true, null]],
        1052 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['_locale', 'filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        1079 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['_locale', 'filter', 'path'], ['GET' => 0], null, false, true, null]],
        1113 => [[['_route' => 'sg_datatables_edit', '_controller' => 'Sg\\DatatablesBundle\\Controller\\DatatableController::editAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        1158 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
        ],
        1180 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1227 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1242 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1263 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1277 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1288 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1328 => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1343 => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        1356 => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1376 => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], ['_locale'], ['GET' => 0], null, true, false, null]],
        1393 => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1418 => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1443 => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        1468 => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1495 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
        1506 => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1539 => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1560 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1581 => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        1602 => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1616 => [
            [['_route' => 'api'], ['_locale'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
