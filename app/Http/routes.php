<?php

Route::get('/', ['uses' => 'TestController@main']);


Route::group(['namespace' => 'Article', 'prefix' => 'book'], function($route)
{
    Route::group(['prefix' => 'pay', 'namespace' => ''], function($route){
        $route->get('my-book/{title}-{notid}', 'ArticleController@main');
    });

    // $route->get('create', 'ArticleController@main');
});

Route::post('/', function () {
    return "Hello";
});

Route::get('hello-world/{name?}', function($name='Guest'){
    return 'hello ' . $name;
})->where([
        'name' => '[a-zA-Z]{3,10}'
]);


Route::group(['prefix' => 'test'], function($route){
    $route->get('hello-world', ['as' => 'hello.word', 'uses' => function(){
        return 'route group';
    }]);
});
