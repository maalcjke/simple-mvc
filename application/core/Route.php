<?php

namespace mvc\application\core;

/**
 * Управлаение маршрутами приложения
 */

final class Route
{
  protected $url;
  protected $params = [];
  protected $url_query = [];

  function __construct()
  {
    $this->url = trim($_SERVER['REQUEST_URI'], '/');
  }

  public function boot()
  {
    if($this->match())
      $this->check_exists();
    else View::ErrorCode(404);
  }

  public function match()
  {
    $links = require_once './application/configs/routes.php';
    foreach ($links as $key => $val) {
      if (preg_match('#^' . $key . '$#', $this->url, $matches)) {
        $this->params = $val;
        $this->url_query = $matches;
        return true;
      }
    }
    return false;
  }

  public function check_exists()
  {
      $path = 'mvc\application\controllers\\' . $this->params['Controller'] . 'Controller';
      if(class_exists($path))
        if(method_exists($path, $this->params['Action'] . 'Action'))
          $this->loadController($path);
        else echo "Method: {$this->params['Action']} not found";
      else echo "Controller: {$this->params['Controller']} not found";
  }

  public function loadController($path)
  {
    $controller = new $path($this->params, $this->url_query);
    $action = $this->params['Action'] . 'Action';
    $controller->$action();
  }
}


 ?>
