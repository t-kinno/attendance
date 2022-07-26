<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'test_students';

    protected $fillable = [
        'student_number',
        'student_name',
        'student_ruby',
        'student_gender',
        'department_id',
        'overview',
    ];
}
