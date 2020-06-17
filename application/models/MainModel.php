<?php

namespace mvc\application\models;

use mvc\application\core\Model;

class MainModel extends Model
{
  public function getLocation()
  {
    echo "<br>Вызван " . get_class($this);
  }
}


 ?>
