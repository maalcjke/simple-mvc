# simple-mvc
Simple implementation mvc application
- Written in PSR-2 format
- OOP

## Installation
 - Copy the contents of the repository to the working directory of the web server
 - Open a command prompt **inside** the folder
 - Enter `composer install`

## Features
 - Used template engine [Twig](https://github.com/twigphp/Twig)
 - Theme system (./application/view/themes/)
 - Semantic urls (http://example.com/feedback)
 - Fast

## Structure template
 * includes (folder) inside: header.tpl and footer.tpl
 * markup.tpl
 
 Example theme - `./application/view/themes/light`
  
## Available variables
 - In code
  ```php
  $this->route (Array with information: Controller, Action)
  $this->settings (Array with information: theme, debug mode, build)
  ```
 - In template engine
  ```tpl
  {{ mvc.page_body }} - loaded page
  {{ mvc.settings. }} - array with information: theme, debug mode, build
  {{ mvc.route. }} - array with information: Controller, Action
  ```
  
## Create your First Page
 - open file routes.php (./application/configs/routes.php)
 - add this: 
 ```php
 'github' => [
    'Controller' => 'main',
    'Action' => 'github'
  ]
 ```
 - then open MainController (./application/controllers/MainController.php)
 - add this:
 ```php
  public function githubAction()
  {
    $this->view->render(); // You can use $this->view->render('custom page', arrays)
  }
 ```
 - then create and open file github.tpl (./application/views/themes/light/main/)
 - add this:
 ```php
  {% block content %}

  <p>This is github page</p>

  {% endblock %}
 ```
 - Open your page http://example.com/github
