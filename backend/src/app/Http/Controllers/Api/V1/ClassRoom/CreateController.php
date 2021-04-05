<?php

namespace App\Http\Controllers\Api\V1\ClassRoom;


use App\ClassRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(Request $request)
    {
        try {
            $classRoom = new ClassRoom();
            $classRoom->create($request->all());

            return $this->responseSuccess("Turma criada com sucesso!", 201);

        } catch(\Exception $e) {

            return $this->responseFail($e->getMessage(),500);
        }
    }
}
