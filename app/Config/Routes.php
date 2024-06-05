<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('HelloWorld', 'HelloWorld::index');
$routes->get('HelloWorld/testDatabaseConnection', 'HelloWorld::testDatabaseConnection');
$routes->get('Blog','Blog::index');