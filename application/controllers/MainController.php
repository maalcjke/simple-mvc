<?php

namespace mvc\application\controllers;

use mvc\application\core\Controller;

class MainController extends Controller
{
  public function indexAction()
  {
    $this->view->render();
  }

  public function aboutAction()
  {
    $this->view->render();
  }
}


 ?>
