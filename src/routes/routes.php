<?php

Route::group(['prefix' => 'retribusi-online'], function() {
    Route::get('demo', 'Bantenprov\RetribusiOnline\Http\Controllers\RetribusiOnlineController@demo');
});
