<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table = 'students_classes';

    protected $fillable = ['student_id', 'class_id'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
