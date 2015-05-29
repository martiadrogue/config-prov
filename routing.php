<?php

return [
        'package' => [
                'namespace' => 'Com\\Martiadrogue\\Provincies\\Controller\\'
            ],
        'public_home' => [
                'path' => '/',
                'defaults' => 'HomeController::index'
            ],

        'public_about' => [
                'path' => '/about',
                'defaults' => 'HomeController::about',
                'services' => 'services2.php'
            ],

        'public_contact' => [
                'path' => '/contact',
                'defaults' => 'HomeController::contact'
            ],

        'public_calculadora_municipis' => [
                'path' => '/calculadora-municipis/:arg',
                'defaults' => 'MunicipiService::index',
                'services' => 'services3.php'
            ],

        'public_detalls_provincia' => [
                'path' => '/provincia/:arg',
                'defaults' => 'ProvinciaController::detail',
                'services' => 'services2.php'
            ],

        'public_llista_municipis' => [
                'path' => '/municipi/:arg',
                'defaults' => 'MunicipiService::index'
            ],

        'admin__llista_provincies' => [
                'path' => '/et6tdkjvjo/provincies',
                'defaults' => 'Admin\ProvinciaController::index'
            ],

        'admin_create_provincia' => [
                'path' => '/et6tdkjvjo/provincies/create',
                'defaults' => 'Admin\ProvinciaController::create'
            ],

        'admin_edit_provincia' => [
                'path' => '/et6tdkjvjo/provincies/edit/:arg',
                'defaults' => 'Admin\ProvinciaController::edit'
            ],

        'admin_delete_provincia' => [
                'path' => '/et6tdkjvjo/provincies/delete/:arg',
                'defaults' => 'Admin\ProvinciaController::delete'
            ],

        'admin_llista_municipis' => [
                'path' => '/et6tdkjvjo/municipis',
                'defaults' => 'Admin\MunicipiController::index'
            ],

        'admin_create_municipi' => [
                'path' => '/et6tdkjvjo/municipis/create',
                'defaults' => 'Admin\MunicipiController::create'
            ],

        'admin_edit_municipi' => [
                'path' => '/et6tdkjvjo/municipis/edit/:arg',
                'defaults' => 'Admin\MunicipiController::edit'
            ],

        'admin_delete_municipi' => [
                'path' => '/et6tdkjvjo/municipis/delete/:arg',
                'defaults' => 'Admin\MunicipiController::delete'
            ],

        'admin_llista_usuaris' => [
                'path' => '/et6tdkjvjo/usuaris',
                'defaults' => 'Admin\UsuariController::index'
            ],

        'admin_create_usuari' => [
                'path' => '/et6tdkjvjo/usuaris/create/:arg',
                'defaults' => 'Admin\UsuariController::create'
            ],
        'admin_edit_usuari' => [
                'path' => '/et6tdkjvjo/usuaris/edit/:arg',
                'defaults' => 'Admin\UsuariController::edit'
            ],

        'admin_delete_usuari' => [
                'path' => '/et6tdkjvjo/usuaris/delete/:arg',
                'defaults' => 'Admin\UsuariController::delete'
            ],

        'admin_session_login' => [
                'path' => '/et6tdkjvjo/usuaris/login',
                'defaults' => 'Admin\SessionController::obtainAccess'
            ],
        'admin_session_logpout' => [
                'path' => '/et6tdkjvjo/usuaris/logout',
                'defaults' => 'Admin\SessionController::closeAccess'
            ],
        'error_not_found' => [
                'path' => '/404',
                'defaults' => 'ErrorController::404'
            ],
        'error_service_unavailable' => [
                'path' => '/503',
                'defaults' => 'ErrorController::503'
            ],
    ];
