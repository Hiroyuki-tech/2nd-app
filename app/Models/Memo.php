<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    //デーブル名
    protected $table = 'my_flights';
　　//可変項目
    protected $fillable =
    ['fillable','content'];
}
