<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskForm extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'task_form';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'sessionID';

    protected $fillable = ['sessionID'];
}
