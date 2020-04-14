<?php

namespace App\Domains\Employee;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;

class EmployeeRepository 
{
    public function index()
    {
        return Employee::paginate(5);
    }

    public function store($attributes)
    {
        $employee = Employee::create($attributes);
        return $employee;
    }

    public function show($id)
    {
        return Employee::findOrFail($id);
    }

    public function update($employee,$attributes)
    {
        $employee->update($attributes);
        return $employee->fresh();
    }

    public function destroy($employee)
    {
        $employee->delete();
        return $employee;
    }
}
