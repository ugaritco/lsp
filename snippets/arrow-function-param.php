<?php

use App\Models\User;
use Heritage\Database\Query\Builder;

User::where(fn(Builder $q) => $q->whereIn('
