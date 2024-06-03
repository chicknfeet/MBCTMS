<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkpoint extends Model
{
    protected $fillable = ['name', 'age', 'schedule', 'route', 'busno', 'conductor', 'dispatcher', 'status'];
}

