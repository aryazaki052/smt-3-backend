<?php

class Tour extends controller {
  public function index() 
  {
    $this->view('frontend/meta/meta');
    $this->view('frontend/navbar/navbar');
    $this->view('frontend/tour/index');
    $this->view('frontend/footer/footer');
  }
}

?>
