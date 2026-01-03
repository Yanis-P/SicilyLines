<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $table = 'equipement';

    protected $fillable = [
        'name',
        'description',
    ];
}
