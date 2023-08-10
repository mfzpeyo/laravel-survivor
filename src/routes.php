<?php
use Peyotest\LaravelSurvivor\SurvivorController;

Route::group(['middleware' => ['web']], function () {
    Route::get((config('survivor.ping_url') ?: 'survivor/ping'),
		[SurvivorController::class,'ping']
    ])->name('survivor.ping');
});
