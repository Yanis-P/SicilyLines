<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Equipement extends Model
{
    protected $table = 'equipement';

    protected $fillable = [
        'bateau_id',
        'name',
        'description',
    ];

    public function bateau(): BelongsTo
    {
        return $this->belongsTo(Bateau::class);
    }
}
