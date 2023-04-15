<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientApplication extends Model
{
    use HasFactory;

    public const STATUS_STARTED = 0;
    public const STATUS_CANCELED = 3;
    public const STATUS_RUNNING = 1;
    public const STATUS_FINISHED = 2;

    public const STATUSES = [
        self::STATUS_STARTED =>'Получена',
        self::STATUS_CANCELED  => 'Отменена',
        self::STATUS_RUNNING  => 'На обработке',
        self::STATUS_FINISHED => 'Завершена',
    ];

    public const STATUS_COLORS = [
        self::STATUS_STARTED =>'gray',
        self::STATUS_CANCELED  => 'red',
        self::STATUS_RUNNING  => 'yellow',
        self::STATUS_FINISHED => 'green',
    ];

    public const TYPE_SIMPLE = 0;
    public const TYPE_COMMENT = 1;

    public const TYPES = [
        self::TYPE_SIMPLE  => 'Запись на консультацию',
        self::TYPE_COMMENT  => 'Заявка на кейтеринг',
    ];



    protected $table = 'clients_applications';

    protected $fillable = ['client_name','client_comment','application_type','client_phone',
        'application_status'];
}
