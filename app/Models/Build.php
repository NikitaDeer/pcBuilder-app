<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', //привязка к юзеру
        'name', //наименование
        'total_cost', //общая стоимость
    ];

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
