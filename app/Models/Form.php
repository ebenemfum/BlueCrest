<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'subsidiary',
        'cluster',
        'supervisor_name',
        'attention_pledge',
        'passport_photo',
        'signature',
    ];
}
