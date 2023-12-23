<?php

class controller{
  public function view($view, $data = []){
    include '../app/view/' . $view . '.php';
  }
  
}