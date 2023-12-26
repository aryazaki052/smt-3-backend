<?php

class controller{
  public function view($view, $data = []){

    include '../app/view/' . $view . '.php';
  }
  
  public function model($model) {
    require_once '../app/models/' . $model . '.php';
    return new $model();
  }
}
