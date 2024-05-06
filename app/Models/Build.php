<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    use HasFactory;

    /**
     * Обратное отношение "один ко многим" с моделью User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Отношение "один ко многим" с моделью BuildComponent.
     */
    public function buildComponents()
    {
        return $this->hasMany(BuildComponent::class);
    }
}
