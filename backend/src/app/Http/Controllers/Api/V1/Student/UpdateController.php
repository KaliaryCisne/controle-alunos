<?php


namespace App\Http\Controllers\Api\V1\Student;


use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentUpdateRequest;
use App\Student;

class UpdateController extends Controller
{
    public function update(StudentUpdateRequest $request, $id)
    {
        try {
            $student = Student::findOrFail($id);
            $student->update($request->all());

            return $this->responseSuccess("Estudante atualizado com sucesso!", 200);
        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }
}
