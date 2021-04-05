<?php


namespace App\Http\Controllers\Api\V1\ClassRoom;


use App\ClassRoom;
use App\Http\Controllers\Controller;
use App\StudentClass;

class ListController extends Controller
{
    public function list()
    {
        try {
            $classes = ClassRoom::all();

            return $this->responseSuccess($classes, 200);
        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }

    /**
     * Retorna os estudantes matriculados em uma turma
     */
    public function students($id)
    {
        try {
            $classRoom = ClassRoom::find($id);
            return $this->responseSuccess($classRoom->students, 200);
        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }
}
