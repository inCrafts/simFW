<?php

namespace app\controllers;

class MainControler extends AppController {

//    public $layout = 'test';

    public function indexAction () {
//        $this->layout = 'test';
        //echo __METHOD__;
        $this->setMeta('Главная', 'Описание...', 'Ключевые слова...');
        $name = 'Имя';
        $field = 'Значение';
        $names = ['Алексей', 'Екатерина', 'Василий', 'Анастасия'];
        $this->set(compact('name', 'field', 'names'));
    }
}