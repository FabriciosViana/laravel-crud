<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
        /**
    * @var array
    */
    protected $fillable = ['name', 'email', 'phone'];
    use HasFactory;
}
