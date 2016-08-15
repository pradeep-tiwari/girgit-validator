<?php

require_once '../girgit/vendor/autoload.php';

$validator = new Girgit\Validator\Validator($_POST);

// this works as form data sticker

if(!empty($_POST)) {
    $validator->setRule('username',         'required|alpha|min:5|max:10');
    $validator->setRule('password',         'required|min:6|max:15');
    $validator->setRule('email',            'required|email');
    $validator->setRule('regex',            'regex:/^[a-z]+$/i');
    $validator->setRule('slug',             'slug');
    $validator->setRule('date',             'date:d-m-Y');
    $validator->setRule('date_before',      'before:/d-m-Y,12-09-2016/');
    $validator->setRule('date_after',       'after:/d-m-Y,12-07-2016/');
    $validator->setRule('confirm_password', 'required|match:password=' . $_POST['password']);
    $validator->setRule('length',           'length:12');
    $validator->setRule('age',              'between:16,20');
    $validator->setRule('url',              'url');
    $validator->setRule('ip',               'ip');
    $validator->run();
}