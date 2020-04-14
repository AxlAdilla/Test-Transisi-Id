<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Domains\Company\CompanyService;
use App\Domains\Employee\EmployeeService;
use App\Http\Requests\Employee\StoreEmployeePost;
use App\Http\Requests\Employee\UpdateEmployeePost;

class EmployeeController extends Controller
{
    private $employeeService;

    private $companyService;

    public function __construct(EmployeeService $employeeService,CompanyService $companyService){
        $this->employeeService = $employeeService;
        $this->companyService = $companyService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employeeService->indexEmployee();
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = $this->companyService->indexCompanies();
        return view('employee.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeePost $request)
    {
        //
        $employee = $this->employeeService->storeEmployee($request->all());
        return redirect(route('employee.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = $this->employeeService->showEmployee($id);
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = $this->companyService->indexCompanies();
        $employee = $this->employeeService->showEmployee($id);
        return view('employee.edit',compact(['companies','employee']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeePost $request, $id)
    {
        $employee = $this->employeeService->updateEmployee($request->all(), $id);
        return redirect(route('employee.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = $this->employeeService->destroyEmployee($id);
        return redirect(route('employee.index'));
    }
}
