<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', //тип (видюха, матка т.д.)
        'name', //наименование
        'manufacturer', //производитель
        'specifications', // характеристики
        'price', //цена
        'image', //картинка
    ];
}
