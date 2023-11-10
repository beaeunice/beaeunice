<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bec_user extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $casts = [
        'full_name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'password_confirmation' => 'string'
    ];
    protected $fillable = [
        'reg_full_name',
        'reg_email',
        'password',
        'password_confirmation'

    ];
}
