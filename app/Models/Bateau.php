<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bateau extends Model
{
    public function equipements(): HasMany
    {
        return $this->hasMany(Equipement::Class);
    }
}
