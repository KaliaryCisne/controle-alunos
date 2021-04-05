<?php


namespace App\Http\Controllers\Api\V1\Student;


use App\Http\Controllers\Controller;
use App\Student;

class ListController extends Controller
{
    public function list()
    {
        try {
            $students = Student::all();
            return $this->responseSuccess($students, 200);

        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }

    public function classes($id)
    {
        try {
            $student = Student::find($id);
            return $this->responseSuccess($student->classes, 200);
        } catch (\Exception $e) {
            return $this->responseFail($e->getMessage(), 500);
        }
    }
}
