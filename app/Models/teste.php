<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teste extends Model
{
    use HasFactory;
    protected  $fillable = ['name', 'email', 'password'];
    protected $table = 'testes';
}