<?php

namespace App\Models\Research;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_event_type';
}
