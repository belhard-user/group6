<?php

Route::get('/', ['uses' => 'MainController@index', 'as' => 'main']);


Route::group(['prefix' => 'ads'], function($route){
    $route->get('create-notice', ['as' => 'create-notice', 'uses' => 'NoticeController@create']);
    $route->get('{id}/view-notice', ['as' => 'view-notice', 'uses' => 'NoticeController@view']);
    $route->post('create-notice', ['as' => 'store-notice', 'uses' => 'NoticeController@store']);
    $route->post('{id}/load-photo', ['as' => 'photo-notice', 'uses' => 'NoticeController@addPhoto']);
});



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
        return view('test.index');
    }]);

    $route->post('form', ['as' => 'test.form', 'uses' => 'TestController@form']);
    $route->get('photo', ['as' => 'test.form', 'uses' => 'TestController@photo']);
});


Route::group(['prefix' => 'db'], function($route){
    $route->get('select', 'DBController@select');
    $route->get('insert', 'DBController@insert');
    $route->get('delete', 'DBController@delete');
    $route->get('update', 'DBController@update');
});