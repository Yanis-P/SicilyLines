<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Equipements extends Model
{
    protected $table = 'equipements';

    protected $fillable = ['libelleequipements', 'bateau_id'];

    public function bateau(): BelongsTo
    {
        return $this->belongsTo(Bateaus::class);
    }
}
