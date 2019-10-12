<?php

namespace app\controllers;

use simFW\Cache;

class MainControler extends AppController {

//    public $layout = 'test';

    public function indexAction () {
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id=?', [2]);
        $this->setMeta('Главная', 'Описание...', 'Ключевые слова...');
        $name = 'Имя';
        $field = 'Значение';
        $names = ['Алексей', 'Екатерина', 'Василий', 'Анастасия', 'Иван'];
        $cache = Cache::instance();
//        $cache->set('test', $names);
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $names);

        }
        debug($data);
        $this->set(compact('name', 'field', 'names', 'posts'));
    }
}