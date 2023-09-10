<?php

Route::get('demo', function() {
    $value = config('demo');
    dd($value);
    echo 'Hello from the demo package!'.$value;
});

Route::get('demo1', function() {
    echo 'Hello from the demo package! - 1';
});

Route::get('demo-view', function () {
    return view('demo::index');
});
