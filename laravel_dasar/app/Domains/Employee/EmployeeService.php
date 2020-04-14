<?php

namespace App\Domains\Employee;
use Illuminate\Support\Arr;

class EmployeeService 
{
    private $companyRepo;

    public function __construct(EmployeeRepository $employeeRepo)
    {
        $this->employeeRepo = $employeeRepo;
    }

    public function indexEmployee()
    {
        $employees = $this->employeeRepo->index();
        return $employees;
    }

    public function storeEmployee($payload)
    {
        $attributes = $this->mapStoreCompanyPayload($payload);

        $employee = $this->employeeRepo->store($attributes);
        return $employee;
    }

    public function mapStoreCompanyPayload($payload)
    {
        return [
            'name'=>Arr::get($payload,'name'),
            'company_id'=>Arr::get($payload,'company_id'),
            'email'=>Arr::get($payload,'email'),
        ];
    }

    public function showEmployee($id)
    {
        $employee = $this->employeeRepo->show($id);
        return $employee;
    }

    public function updateEmployee($payload,$id)
    {
        $employee = $this->employeeRepo->show($id);
        $attributes = $this->mapUpdateCompanyPayload($payload);
        
        $employee = $this->employeeRepo->update($employee,$attributes);
        return $employee;
    }

    public function mapUpdateCompanyPayload($payload)
    {
        return [
            'name'=>Arr::get($payload,'name'),
            'company_id'=>Arr::get($payload,'company_id'),
            'email'=>Arr::get($payload,'email'),
        ];
    }

    public function destroyEmployee($id)
    {
        $employee = $this->employeeRepo->show($id);
        $employee = $this->employeeRepo->destroy($employee);

        return $employee;
    }
}
