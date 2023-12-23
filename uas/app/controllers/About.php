<?php

class About extends controller{
  public function index(){
    $this->view('frontend/meta/meta');
    $this->view('frontend/navbar/navbar');
    $this -> view('frontend/about/index');
    $this->view('frontend/footer/footer');
  }

  public function page(){
    echo "about/page";
  }
}