<?php

namespace mvc\application\core;

class Controller
{
  protected $route;
  protected $url_query;

  function __construct($route, $url_query)
  {
    $this->route = $route;
    $this->url_query = $url_query;
    $this->view = new View($route);
    $this->model = $this->loadModel(); // В дальнейшем используется во всех конроллерах
  }

  public function loadModel()
  {
    $path = 'mvc\application\models\\' . $this->route['Controller'] . 'Model';
    return new $path;
  }
}


 ?>
