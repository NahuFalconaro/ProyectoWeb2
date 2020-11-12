<?php
require_once 'route.php';
require_once 'api/apiProductController.php';

// instacio el router
$router = new Router();

// armo la tabla de ruteo de la API REST
//$router->addRoute('/producto', 'GET', 'ApiTasksController', 'GetTasks');

//comentario/:ID pertenece al id producto?
$router->addRoute('comentario/:ID', 'GET', 'apiProductController', 'getCommentID');
$router->addRoute('/comentario/:ID', 'POST', 'apiProductController', 'insertComment');
$router->addRoute('/comentario/:ID', 'DELETE', 'apiProductController', 'deleteComment');

 //run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
