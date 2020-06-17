<?php

namespace mvc\application\core;

class View
{
  protected $route;
  protected $settings;

  private $loader;
  private $twig;

  function __construct($route)
  {
    $this->route = $route;
    $this->settings = require_once './application/configs/config.php';

    $this->loadTwig();
  }

  public function loadTwig()
  {
    $this->loader = new \Twig\Loader\FilesystemLoader([
      './application/view/themes/'. $this->settings['theme'],
      './application/view/themes/'. $this->settings['theme'] . '/includes',
      './application/view/themes/'. $this->settings['theme'] .'/' . $this->route['Controller'] . '/'
    ]);

    $this->twig = new \Twig\Environment($this->loader, [
      'debug' => $this->settings['debug'],
      'cache' => './public/cache/' . $this->settings['theme'],
    ]);
  }

  public function render($page = null, $args = [])
  {
    if(empty($page)) $page = $this->route['Action'] . '.tpl';

    $args['mvc']['page_body'] = $this->twig->load($page);
    $args['mvc']['settings'] = $this->settings;
    $args['mvc']['route'] = $this->route;

    $this->twig->display('markup.tpl', $args);
  }

  public static function ErrorCode($code)
  {
    header("HTTP/1.0 {$code}");
  }
}


 ?>
