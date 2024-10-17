<?php 

class Controller {
    public function view($view, $data = []) {

        // var_dump($view); die();
        require_once '../app/views/' . $view . '.php';
    }
}