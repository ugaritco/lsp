<?php

use App\Models\User;
use Heritage\Database\Query\Builder;

Route::get('/', function () {
    $user = new User(['
