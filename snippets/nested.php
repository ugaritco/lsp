<?php

use App\Models\User;
use Heritage\Database\Query\Builder;

Route::get('/', function () {

    trans('auth.throttle');

    User::where('
