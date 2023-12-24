<?php

class Transport extends controller {
  public function index() 
  {
    $this->view('frontend/meta/meta');
    $this->view('frontend/navbar/navbar');
    $this->view('frontend/transport/index');
    $this->view('frontend/footer/footer');
  }
}

?>
