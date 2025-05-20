<?php 

class App {

  protected $controller = 'home',
            $method     = 'index',
            $params     = [];
  
  public function __construct()
  {
    $url = $this->parseURL();
    
    // pengecekan jika ada parameter yang dikirimakan
    if( isset($_GET['url']) && file_exists("../app/controllers/$url[0].php") ) {
      $this->controller = $url[0];
      unset($url[0]);
    }

    var_dump($url);

  }

  public function parseURL()
  {
    if(isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
    }
    return $url;
  }

}