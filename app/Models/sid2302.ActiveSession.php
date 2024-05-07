<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sid2302.ActiveSession extends Model
{
    use HasFactory;

    public bool $isActive = false;
}
