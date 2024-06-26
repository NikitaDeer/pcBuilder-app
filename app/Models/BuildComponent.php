<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildComponent extends Model
{
    use HasFactory;


    protected $fillable = [
        'build_id', //привязка к сборке
        'component_id', //наименование
        'quantity', //количество
    ];

    /**
     * Обратное отношение "один ко многим" с моделью Build.
     */
    public function build()
    {
        return $this->belongsTo(Build::class);
    }

    /**
     * Обратное отношение "один ко многим" с моделью Component.
     */
    public function component()
    {
        return $this->belongsTo(Component::class);
    }
}
