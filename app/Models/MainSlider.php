<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    use HasFactory;

    protected $table = 'slider';

    const CATERING = 1;
    const FOOD_SHET = 2;
    const FOOD_BOX = 3;
    const COFFE = 4;

    const CATEGORIES = [
        self::CATERING => 'кейтеринг',
        self::FOOD_BOX => 'фуд-боксы',
        self::FOOD_SHET=>'фуршет',
        self::COFFE=>'кофе-бейк'
    ];
}
