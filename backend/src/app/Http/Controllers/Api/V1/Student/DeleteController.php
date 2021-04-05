<?php


namespace App\Http\Controllers\Api\V1\Student;


use App\Http\Controllers\Controller;
use App\Student;

class DeleteController extends Controller
{
    public function delete($id)
    {
        try {
            $student = Student::findOrFail($id);
            $student->delete();

            return $this->responseSuccess("Estudante removido com sucesso!", 200);

        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }
}
