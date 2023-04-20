<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $table = 'categories';

    use HasFactory;

    public function getImageAttribute($value)
    {
        return $value ? asset($value) : asset('/img/sategory-page.PNG');
    }

    public static function boot() {
        parent::boot();

        //while creating/inserting item into db
        static::creating(function (Category $item) {
            $item->slug = Str::of($item->title)->slug('-');//assigning value
        });
    }
}
