<?php

Route::get('live-tinker', 'Rezgui\LiveTinker\Controllers\LiveTinkerController@index');

Route::post('live-tinker/ajax', 'Rezgui\LiveTinker\Controllers\LiveTinkerController@ajax');
