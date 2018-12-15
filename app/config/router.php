<?php
$router = new \Phalcon\Mvc\Router();

$routings = [
    '/'=>['controller' => 'Admin/Home', 'action'=>'index'],
];

foreach ($routings as $url=>$routing)
{
    $router->add($url, $routing);
}
