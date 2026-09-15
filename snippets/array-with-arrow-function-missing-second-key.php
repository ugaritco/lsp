<?php

use App\Models\User;
use Heritage\Database\Query\Builder;

User::with([
    'team' => fn(Builder $q) => $q->where(''),
    '
