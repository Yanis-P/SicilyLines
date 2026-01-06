<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\{equipements, Bateaus};

class Bateaus extends Model
{
    protected $table = 'bateaus';

    protected $fillable = [
        'nom',
        'slug',
        'vitesse',
        'image',
    ];

    public function equipements(): HasMany
    {
        return $this->hasMany(Equipements::Class);
    }
}
