<?php

namespace App\Domains\Company;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class CompanyRepository 
{
    public function index()
    {
        return Company::paginate(5);
    }

    public function uploadLogo($logo)
    {
        $logo = $logo->store('','company');
        return $logo;
    }

    public function store($attributes)
    {
        $company = Company::create($attributes);
        return $company;
    }

    public function show($id)
    {
        return Company::findOrFail($id);
    }

    public function update($company,$attributes)
    {
        $company->update($attributes);
        return $company->fresh();
    }

    public function deleteLogo($logo)
    {
        $res = Storage::disk('company')->delete($logo);
        return $res;
    }

    public function destroy($company)
    {
        $company->delete();
        return $company;
    }
}
