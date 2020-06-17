<?php

namespace mvc\application\controllers;

use mvc\application\core\Controller;

class WeatherController extends Controller
{
  public function cityAction()
  {
    $city = $this->url_query['city'];
    $temperature = $this->model->getTemp();

    $this->view->render(null, ['title' => 'Погода в ' . $city, 'city' => $city, 'temperature' => $temperature]);
  }
}


 ?>
