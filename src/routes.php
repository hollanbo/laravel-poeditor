<?php

Route::group(['prefix' => 'hollanbo/poeditor'], function () {
    Route::get('/', ['as' => 'hollanbo.poeditor.index', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@index']);
    Route::put('save', ['as' => 'hollanbo.poeditor.saveToFile', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@saveToFile']);

    Route::put('publish', ['as' => 'hollanbo.poeditor.publish', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@publish']);


    Route::post('save', ['as' => 'hollanbo.poeditor.saveTranslation', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@saveTranslation']);
});
