<?php

namespace mvc\application\models;

use mvc\application\core\Model;

class WeatherModel extends Model
{
  public function getTemp()
  {
    return rand(1, 24);
  }
}


 ?>
