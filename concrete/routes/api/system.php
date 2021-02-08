<?php

defined('C5_EXECUTE') or die('Access Denied.');

/**
 * @var \Concrete\Core\Routing\Router
 * @var $app \Concrete\Core\Application\Application
 */
use Concrete\Core\System\Info;
use Concrete\Core\System\InfoTransformer;
use League\Fractal\Resource\Item;

$router->get('/system/info', function () {
    return json_encode((new InfoTransformer())->transform(new Info()));
})->setScopes('system:info:read');
