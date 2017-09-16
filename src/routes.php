<?php

Route::group(['prefix' => 'hollanbo/poeditor'], function () {
    Route::get('/', ['as' => 'hollanbo.poeditor.index', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@index']);
    Route::get('save', ['as' => 'hollanbo.poeditor.saveToFile', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@saveToFile']);


    Route::post('save', ['as' => 'hollanbo.poeditor.saveTranslation', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@saveTranslation']);
});
