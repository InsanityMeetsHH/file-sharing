<?php
return [
    // localized routing (e.g. CONTROLLER-ACTION)
    'routes' => [
        'file-upload' => [
            'route'      => '/de/file-upload/',
            'method'     => 'App\Controller\FileController:upload',
            'methods'    => ['POST'],
            'rolesAllow' => ['member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'file-public' => [
            'route'      => '/de/file-public/{uuid}',
            'method'     => 'App\Controller\FileController:togglePublic',
            'methods'    => ['GET'],
            'rolesAllow' => ['member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'file-remove' => [
            'route'      => '/de/file-remove/{uuid}',
            'method'     => 'App\Controller\FileController:remove',
            'methods'    => ['GET'],
            'rolesAllow' => ['member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'file-download' => [
            'route'      => '/de/download/{uuid}',
            'method'     => 'App\Controller\FileController:download',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'file-extension-create' => [
            'route'      => '/de/file-extension/create',
            'method'     => 'App\Controller\FileExtensionController:create',
            'methods'    => ['GET'],
            'rolesAllow' => ['superadmin'],
            'rolesDeny'  => [],
        ],
        'file-extension-save' => [
            'route'      => '/de/file-extension/save',
            'method'     => 'App\Controller\FileExtensionController:saveCreate',
            'methods'    => ['POST'],
            'rolesAllow' => ['superadmin'],
            'rolesDeny'  => [],
        ],
        'file-extension-show' => [
            'route'      => '/de/file-extensions',
            'method'     => 'App\Controller\FileExtensionController:show',
            'methods'    => ['GET'],
            'rolesAllow' => ['superadmin'],
            'rolesDeny'  => [],
        ],
        'file-extension-active' => [
            'route'      => '/de/file-extensions/active/{id}',
            'method'     => 'App\Controller\FileExtensionController:toggleActive',
            'methods'    => ['GET'],
            'rolesAllow' => ['superadmin'],
            'rolesDeny'  => [],
        ],
        'file-extension-remove' => [
            'route'      => '/de/file-extension-remove/{id}',
            'method'     => 'App\Controller\FileExtensionController:remove',
            'methods'    => ['GET'],
            'rolesAllow' => ['superadmin'],
            'rolesDeny'  => [],
        ],
        'user-enable-two-factor' => [
            'route'      => '/de/zwei-faktor-aktivieren',
            'method'     => 'App\Controller\UserController:enableTwoFactor',
            'methods'    => ['GET', 'POST'],
            'rolesAllow' => ['member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'user-two-factor' => [
            'route'      => '/de/zwei-faktor',
            'method'     => 'App\Controller\UserController:twoFactor',
            'methods'    => ['GET', 'POST'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'user-login' => [
            'route'      => '/de/login',
            'method'     => 'App\Controller\UserController:login',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'user-logout' => [
            'route'      => '/de/logout',
            'method'     => 'App\Controller\UserController:logout',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'user-login-validate' => [
            'route'      => '/de/validate',
            'method'     => 'App\Controller\UserController:loginValidate',
            'methods'    => ['POST'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'user-show' => [
            'route'      => '/de/profil[/{name}]',
            'method'     => 'App\Controller\UserController:show',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'user-create' => [
            'route'      => '/de/user/create',
            'method'     => 'App\Controller\UserController:create',
            'methods'    => ['GET'],
            'rolesAllow' => ['superadmin'],
            'rolesDeny'  => [],
        ],
        'user-save' => [
            'route'      => '/de/user/save',
            'method'     => 'App\Controller\UserController:saveCreate',
            'methods'    => ['POST'],
            'rolesAllow' => ['superadmin'],
            'rolesDeny'  => [],
        ],
        'error-bad-request' => [
            'route'      => '/de/400',
            'method'     => 'App\Controller\ErrorController:badRequest',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'error-not-allowed' => [
            'route'      => '/de/405',
            'method'     => 'App\Controller\ErrorController:notAllowed',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'error-not-found' => [
            'route'      => '/de/404',
            'method'     => 'App\Controller\ErrorController:notFound',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'error-unauthorized' => [
            'route'      => '/de/401',
            'method'     => 'App\Controller\ErrorController:unauthorized',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'file-show' => [
            'route'      => '/de/{uuid}',
            'method'     => 'App\Controller\FileController:show',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
        'page-index' => [
            'route'      => '/de/',
            'method'     => 'App\Controller\PageController:index',
            'methods'    => ['GET'],
            'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
            'rolesDeny'  => [],
        ],
    ],
];