<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'guests';

    protected $fillable = [
        'name',
        'age',
        'sex',
        'room_id',
        'event_id'
    ];
}
