<?php

namespace views;

class BaseView {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function render($view) {
        include 'views/' . $view . '.php';

    }


}
