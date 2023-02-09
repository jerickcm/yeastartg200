<?php

namespace Jerickcm\Yeastartg200\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobilephone extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "mobilephones";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'areacode',
        'telco',
    ];

}
