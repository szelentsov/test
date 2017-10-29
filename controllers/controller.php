<?php
    class Controller {

        function __construct() {
            $this->model = new Price();//модель
            $arr = $this->model->select();
            $this->model = new View();//представление
            $this->model->table($arr);
        }

    }