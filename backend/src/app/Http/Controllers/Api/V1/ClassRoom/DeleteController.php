<?php


namespace App\Http\Controllers\Api\V1\ClassRoom;


use App\ClassRoom;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete($id)
    {
        try {
            $classRoom = ClassRoom::findOrFail($id);
            $classRoom->delete();

            return $this->responseSuccess("Turma removida com sucesso!", 200);

        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }
}
