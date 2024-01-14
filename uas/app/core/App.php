<?php

class App {
  protected $controller  = 'Home';
  protected $method  = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseURL();
    
   // controller
if (!empty($url) && isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
  $this->controller = $url[0];
  unset($url[0]);
}

require_once '../app/controllers/' . $this->controller . '.php';
$this->controller = new $this->controller;

// method
if (!empty($url) && isset($url[1]) && method_exists($this->controller, $url[1])) {
  $this->method = $url[1];
  unset($url[1]);
}


    // params
    if (!empty($url)){
      $this->params = array_values($url);
      // var_dump($url);
    }

    if (!empty($url) && $url[0] === 'register') {
      $this->controller = 'Loginadm';
      $this->method = 'register';
      unset($url[0]);
  }
  
  if (!empty($url) && $url[0] === 'create_account') {
      $this->controller = 'Loginadm';
      $this->method = 'createAccount';
      unset($url[0]);
  }
  
  // jalankan controller, method dan param jika ada
  if (method_exists($this->controller, $this->method)) {
    $controllerInstance = new $this->controller();
    call_user_func_array([$controllerInstance, $this->method], $this->params);
}
  
  // Setelah menjalankan method, cek apakah controller memiliki method authenticate dan jalankan jika ada
  if (!empty($url) && method_exists($this->controller, 'authenticate')) {
      $this->method = 'authenticate';
      call_user_func_array([$this->controller, $this->method], []);
  }


  }

  public function parseURL () {
    if(isset($_GET['url'])){
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
    return [];
  }
  
  
}

?>


