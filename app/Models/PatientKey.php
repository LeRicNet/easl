<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientKey extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'patientkey2';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'patient';
}
