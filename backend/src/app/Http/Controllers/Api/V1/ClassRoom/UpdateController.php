<?php


namespace App\Http\Controllers\Api\V1\ClassRoom;


use App\ClassRoom;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRoom\ClassRoomUpdateRequest;

class UpdateController extends Controller
{
    public function update(ClassRoomUpdateRequest $request, $id)
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
