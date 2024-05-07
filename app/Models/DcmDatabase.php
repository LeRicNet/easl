<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DcmDatabase extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dcm_database2';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'patient';
    
}
