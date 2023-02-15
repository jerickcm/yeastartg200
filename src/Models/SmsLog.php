<?php

namespace Jerickcm\Yeastartg200\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SmsLog extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "sms_log";
    public $timestamps = true;
    protected $fillable = [
        'id',
        'reference_id',
        'telco',
        'simchannel',
        'contact_number',
        'message',
        'sent',
        'benchmark',
    ];
}
