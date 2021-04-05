<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';

    protected $fillable = ['year_execution', 'level', 'serie', 'shift'];

    /**
     * retorna os estudantes de uma turma
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function students()
    {
       return $this->belongsToMany(
            'App\Student',
            'students_classes',
            'class_id',
            'student_id'
        );
    }
}
