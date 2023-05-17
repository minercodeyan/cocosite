<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table='user_info';

    protected $fillable = [
        'first_name',
        'phone_number',
        'birth_date',
        'category',
    ];

    public const AUTO = 1;
    public const BANKHET = 2;
    public const PHOTO = 3;
    public const IT_SCHOOL = 4;
    public const COMPANY = 5;
    public const SCHOOL = 6;
    public const BANK = 7;

    public const SELECT = [
        self::AUTO =>'Автокомпании',
        self::BANKHET  => 'Банкетные залы',
        self::PHOTO  => 'Фотографы',
        self::IT_SCHOOL => 'It - компании',
        self::COMPANY => 'Организаторы / ведущие',
        self::SCHOOL => 'Школы и академии',
        self::BANK => 'Банки',
    ];

}
