<?php 

class App {
  public function __construct()
  {
    echo $this->parseURL();
  }

  public function parseURL()
  {
    if(isset($_GET['url'])) {
      $url = $_GET['url'];
    }
    return $url;
  }

}