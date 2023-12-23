<?php

class Tracking extends controller {
  public function index() 
  {
    $this->view('frontend/meta/meta');
    $this->view('frontend/navbar/navbar');
    $this->view('frontend/tracking/index');
    $this->view('frontend/footer/footer');
  }
}

?>
