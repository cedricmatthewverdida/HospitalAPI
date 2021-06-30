<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_position extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'staff_position';

    protected $fillable = [
        'id',
        'staff_id',
        'staff_description',
        'current_salary',
        'salary_scales'
    ];
}
