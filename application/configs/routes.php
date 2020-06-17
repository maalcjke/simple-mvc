<?php

return [
  'city/(?P<city>\w+)' => [
    'Controller' => 'weather',
    'Action' => 'city'
  ],

  'about' => [
    'Controller' => 'main',
    'Action' => 'about'
  ],

  '' => [
    'Controller' => 'main',
    'Action' => 'index'
  ]
]

 ?>
