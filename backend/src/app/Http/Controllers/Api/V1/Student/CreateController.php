<?php

namespace App\Http\Controllers\Api\V1\Student;


use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(Request $request)
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
