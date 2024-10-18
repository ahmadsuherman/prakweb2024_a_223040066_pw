<?php 

class Controller {
    public function view($view, $data = []) {

        // var_dump($view); die();
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}