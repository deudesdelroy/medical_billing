<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_type',
        'id_number',
        'check_digit',
        'business_name',
        'address',
        'country',
        'city',
        'main_phone_number',
        'second_phone_number',
        'email',
    ];

    public const IDTYPE = ['Natural', 'Jurídica'];

    public function idType() {
        return self::IDTYPE[$this->id_type];
    }
}
