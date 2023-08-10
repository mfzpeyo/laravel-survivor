<?php

Route::group(['middleware' => ['web']], function () {
    Route::get((config('survivor.ping_url') ?: 'survivor/ping'), [
        'as'   => 'survivor.ping',
        'uses' => 'Peyotest\LaravelSurvivor\SurvivorController@ping'
    ]);
});
