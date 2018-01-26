<?php
    namespace DownsMaster\Controllers;
    use DownsMaster\Controllers\Controller;

    class HomeController extends Controller
    {
        public function __construct($container)
        {
            parent::__contruct($container);
        }

        public function index($request, $response, $args)
        {
          echo $this->algumacoisa;
        }

    }
