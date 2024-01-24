<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable= [
        'Event_Name',
        'Event_date',
        'Event_people',
        'Event_description'
    ];
}
