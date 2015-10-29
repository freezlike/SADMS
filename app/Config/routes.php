<?php

Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
Router::connect('/simulate-deduction-:id', array('controller' => 'pages', 'action' => 'simulate'), array(
    'pass' => array('id'),
    'id' => '[0-9]*'
));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
