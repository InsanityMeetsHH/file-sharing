<?php
/**
 * localized routing (e.g. CONTROLLER-ACTION)
 */

return [
    'file-show' => [
        'route'      => '/file/{uuid}/',
        'method'     => 'App\Controller\FileController:showAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'file-upload' => [
        'route'      => '/file/upload/',
        'method'     => 'App\Controller\FileController:uploadAction',
        'methods'    => ['POST'],
        'rolesAllow' => ['member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'file-access' => [
        'route'      => '/file/access/{uuid}/',
        'method'     => 'App\Controller\FileController:toggleAccessAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'file-remove' => [
        'route'      => '/file/remove/{uuid}/',
        'method'     => 'App\Controller\FileController:removeAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'file-extension-create' => [
        'route'      => '/file-extension/create/',
        'method'     => 'App\Controller\FileExtensionController:createAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    'file-extension-save' => [
        'route'      => '/file-extension/save/',
        'method'     => 'App\Controller\FileExtensionController:saveCreateAction',
        'methods'    => ['POST'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    'file-extension-show' => [
        'route'      => '/file-extensions/',
        'method'     => 'App\Controller\FileExtensionController:showAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    'file-extension-hidden' => [
        'route'      => '/file-extensions/hidden/{id}/',
        'method'     => 'App\Controller\FileExtensionController:toggleHiddenAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    'file-extension-remove' => [
        'route'      => '/file-extension/remove/{id}/',
        'method'     => 'App\Controller\FileExtensionController:removeAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    'user-enable-two-factor' => [
        'route'      => '/enable-two-factor/',
        'method'     => 'App\Controller\UserController:enableTwoFactorAction',
        'methods'    => ['GET', 'POST'],
        'rolesAllow' => ['member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'user-two-factor' => [
        'route'      => '/two-factor/',
        'method'     => 'App\Controller\UserController:twoFactorAction',
        'methods'    => ['GET', 'POST'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'user-show' => [
        'route'      => '/profile/[{name}/]',
        'method'     => 'App\Controller\UserController:showAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'user-show-all' => [
        'route'      => '/profiles/',
        'method'     => 'App\Controller\UserController:showAllAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    'user-update-role' => [
        'route'      => '/role/{role}/{name}/',
        'method'     => 'App\Controller\UserController:updateRoleAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    'user-register' => [
        'route'      => '/register/',
        'method'     => 'App\Controller\UserController:registerAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'user-register-save' => [
        'route'      => '/complete-register/',
        'method'     => 'App\Controller\UserController:saveRegisterAction',
        'methods'    => ['POST'],
        'rolesAllow' => ['guest', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'user-hidden' => [
        'route'      => '/user/hidden/{name}/',
        'method'     => 'App\Controller\UserController:toggleHiddenAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    'user-remove' => [
        'route'      => '/user/remove/{name}/',
        'method'     => 'App\Controller\UserController:removeAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['superadmin'],
        'rolesDeny'  => [],
    ],
    
    // this routes fits to all translations
    'file-download' => [
        'route'      => '/download/{uuid}/',
        'method'     => 'App\Controller\FileController:downloadAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'user-login-validate' => [
        'route'      => '/validate/',
        'method'     => 'App\Controller\UserController:loginValidateAction',
        'methods'    => ['POST'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'user-login' => [
        'route'      => '/login/',
        'method'     => 'App\Controller\UserController:loginAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'user-logout' => [
        'route'      => '/logout/',
        'method'     => 'App\Controller\UserController:logoutAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'error-bad-request' => [
        'route'      => '/400/',
        'method'     => 'App\Controller\ErrorController:badRequestAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'error-not-allowed' => [
        'route'      => '/405/',
        'method'     => 'App\Controller\ErrorController:notAllowedAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'error-not-found' => [
        'route'      => '/404/',
        'method'     => 'App\Controller\ErrorController:notFoundAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'error-unauthorized' => [
        'route'      => '/401/',
        'method'     => 'App\Controller\ErrorController:unauthorizedAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
    'page-index' => [
        'route'      => '/',
        'method'     => 'App\Controller\PageController:indexAction',
        'methods'    => ['GET'],
        'rolesAllow' => ['guest', 'member', 'admin', 'superadmin'],
        'rolesDeny'  => [],
    ],
];