<?php
require_once './Model/commentModel.php';
require_once './api/apiController.php';

class apiProductController extends apiController {

  
    function __construct() {
        parent::__construct();
        $this->model = new commentModel();
        $this->view = new APIView();
    }

    //public function getComment($params = null) {
       // $tasks = $this->model->getComment();
     //   $this->view->response($tasks, 200);
   // }

    public function getComment($params = null) {
        $id = $params[':ID'];
        $task = $this->model->getComment($id);

    //    if (!empty($task)) // verifica si la tarea existe
            $this->view->response($task, 200);
//        else
  //          $this->view->response("La tarea con el id=$id no existe", 404);
    }



    public function getCommentID($params = null) {
        $id = $params[':ID'];
        $task = $this->model->getCommentID($id);
        $this->view->response($task, 200);

    }


    public function insertComment($params = null){
        $body = $this->getData();

        $idTask = $this->model->insertComment($body->comment, $body->score, $body->id_product);
        
        if (!empty($idTask)) // verifica si la tarea existe
            $this->view->response( $this->model->getCommentID($idTask), 201);
        else
            $this->view->response("La tarea no se pudo insertar", 404);
    }

    public function deleteComment($params = null) {
        $id = $params[':ID'];
        $comentario = $this->model->getComment($id);
        if (!empty($comentario)) {
            $this->model->deleteComment($id);
            $this->view->response("El comentario fue borrada con exito.", 200);
        } else
            $this->view->response("El comentario con el id={$id} no existe", 404);
    }
    

 
}