<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'cellphone', 'email', 'birthdate', 'gender'];

    /**
     * Retorna as turmas em que um estudante está
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function classes()
    {
        return $this->belongsToMany(
            'App\ClassRoom',
            'students_classes',
            'student_id',
            'class_id'
        );
    }
}
