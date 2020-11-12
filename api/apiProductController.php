<?php
require_once './Model/commentModel.php';
require_once './api/apiController.php';

class apiProductController extends apiController {

  
    function __construct() {
        parent::__construct();
        $this->model = new commentModel();
        $this->view = new APIView();
    }
    public function getCommentID($params = null) {
        $id = $params[':ID'];
        $task = $this->model->getCommentID($id);

        if (!empty($task)) // verifica si la tarea existe
            $this->view->response($task, 200);
        else
            $this->view->response("La tarea con el id=$id no existe", 404);
    }

 
}