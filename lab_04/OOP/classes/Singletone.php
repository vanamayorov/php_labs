<?php

class Singletone {

    private static $instance;
    private $data;

    private function __construct()
    {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self();

        }

        return self::$instance;
    }

    private function __clone()
    {
    }

    public function setData($data) {
        $this->data = $data;
    }

}

