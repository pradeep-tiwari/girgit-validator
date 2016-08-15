<?php

require_once '../girgit/vendor/autoload.php';

$validator = new Girgit\Validator\Validator($_POST);

if(!empty($_POST)) {
    $validator->setRule('username',     'required|alpha|min:5|max:10');
    $validator->setRule('password',     'required|alnum|min:6|max:15');
    $validator->setRule('email',        'required|email');
    $validator->setRule('greet',        'regex:/^[a-z]+$/i');
    $validator->setRule('slug',         'slug');
    $validator->setRule('date',         'date:d-m-Y');
    $validator->setRule('date_before',  'before:/d-m-Y,12-09-2016/');
    $validator->setRule('date_after',   'after:/d-m-Y,12-07-2016/');
    $validator->setRule('url',          'url');
    $validator->run();
}


