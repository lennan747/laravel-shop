<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 2019/9/1
 * Time: 0:22
 */
function test_helper() {
    return 'OK';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}