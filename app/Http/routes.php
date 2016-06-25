<?php

Route::get('/', function () {
    return "Hello";
});

Route::post('/', function () {
    return "Hello";
});

Route::get('hello-world/{name?}', function($name='Guest'){
    return 'hello ' . $name;
})->where([
        'name' => '[a-z]{3,10}'
]);


Route::group(['prefix' => 'test'], function($route){
    $route->get('hello-world', function(){
        return 'route group';
    });
});
