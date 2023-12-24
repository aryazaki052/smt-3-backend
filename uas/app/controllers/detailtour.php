<?php

class detailtour extends controller {
  public function index() 
  {
    $this->view('frontend/meta/meta');
    $this->view('frontend/navbar/navbar');
    $this->view('frontend/detailtour/index');
    $this->view('frontend/footer/footer');
  }
}

?>
