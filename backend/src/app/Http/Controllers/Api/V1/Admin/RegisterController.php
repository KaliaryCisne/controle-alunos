<?php

namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Controller;
use App\StudentClass;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        try {
            $register = new StudentClass();
            $register->create($request->all());

            return $this->responseSuccess("Aluno matriculado com sucesso!", 201);
        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }
}
