<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domains\Company\CompanyService;
use App\Domains\Employee\EmployeeService;

class DashboardController extends Controller
{
    private $employeeService;

    private $companyService;

    public function __construct(EmployeeService $employeeService,CompanyService $companyService){
        $this->employeeService = $employeeService;
        $this->companyService = $companyService;
    }

    public function index()
    {
        $companies = $this->companyService->indexCompanies();
        $employees = $this->employeeService->indexEmployee();
        return view('dashboard',compact(['companies','employees']));
    }
}
