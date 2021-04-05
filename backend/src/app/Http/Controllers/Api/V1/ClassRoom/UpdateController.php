<?php


namespace App\Http\Controllers\Api\V1\ClassRoom;


use App\ClassRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Request $request, $id)
    {
        try {
            $classRoom = ClassRoom::findOrFail($id);
            $classRoom->update($request->all());

            return $this->responseSuccess("Turma atualizada com sucesso!", 200);
        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }
}
