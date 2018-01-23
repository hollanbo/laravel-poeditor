<?php

Route::group(['prefix' => 'hollanbo/poeditor'], function () {
    Route::get('/{locale}', ['as' => 'hollanbo.poeditor.index', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@index']);
    Route::get('sync/{locale}', ['as' => 'hollanbo.poeditor.sync', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@syncTranslations']);

    Route::post('save/{locale}', ['as' => 'hollanbo.poeditor.saveTranslation', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@saveTranslation']);

    Route::put('save/{locale}', ['as' => 'hollanbo.poeditor.saveToFile', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@saveToFile']);

    Route::put('publish/{locale}', ['as' => 'hollanbo.poeditor.publish', 'uses' =>'hollanbo\LaravelPoeditor\PoeditorController@publish']);
});
