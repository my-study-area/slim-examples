<?php
    namespace DownsMaster\Controllers;

    abstract class Controller {
        protected $container;
        protected $msg = 'msg do controller';

        public function __contruct($container)
        {
            $this->container = $container;
        }

        public function __get($key)
        {

            if ($this->container{$key}) {
                return $this->container{$key};
            }
        }


    }
