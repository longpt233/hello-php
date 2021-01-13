<?php
class Controller{

    public function model($model){
        require_once "./src/mvc/model/".$model.".php";
        // truyen vao mot string model va lay ra la mot doi tuong model tuong ung 
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./src/mvc/view/".$view.".php";
    }

}
?>