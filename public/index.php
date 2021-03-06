<?php
require './vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function ($request, $response, $args) {
  echo 'Home';
})->setName('home');

$app->get('/contato[/]', function($request, $response, $args){
  echo 'contato';
});

$app->get('/form[/]', function($request, $response, $args){
  echo "<form method='post' action='/form'>";
  echo "<input type='text' name='nome' value='adriano'>";
  echo "<input type='text' name='idade'  value='34'>";
  echo "<input type='submit' value='enviar' name='enviar'>";
  echo "</form>";
});

$app->post('/form[/]', function ($request, $response, $args) {
  print_r($request->getParams());
  echo $this->router->pathFor('home');
});

$app->get('/params[/]', function($request, $response, $args){
  echo 'params';
  print_r($request->getParams());
  // die();
});

$app->run();
