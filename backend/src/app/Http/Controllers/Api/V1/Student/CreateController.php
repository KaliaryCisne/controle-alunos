<?php

namespace App\Http\Controllers\Api\V1\Student;


use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentCreateRequest;
use App\Student;

class CreateController extends Controller
{
    public function create(StudentCreateRequest $request)
    {
        try {
            $student = new Student();
            $student->create($request->all());
            return $this->responseSuccess("Aluno registrado com sucesso!", 201);

        } catch(\Exception $e) {
            return $this->responseFail($e->getMessage(),500);
        }
    }
}
