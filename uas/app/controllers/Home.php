<?php

class Home extends controller {
  public function index() 
  {
    $this->view('frontend/meta/meta');
    $this->view('frontend/navbar/navbar');
    $this->view('frontend/home/index');
    $this->view('frontend/footer/footer');
  }
}

?>
