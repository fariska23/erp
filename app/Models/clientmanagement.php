<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class clientmanagement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'phone_number',
        'company_name',
    ];
}
