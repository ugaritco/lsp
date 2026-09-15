<?php

use App\Models\User;
use Heritage\Database\Query\Builder;

User::where(function(Builder $q) {
    $q->whereIn('
