<?php

namespace App\Domains\Company;
use Illuminate\Support\Arr;

class CompanyService 
{
    private $companyRepo;

    public function __construct(CompanyRepository $companyRepo)
    {
        $this->companyRepo = $companyRepo;
    }

    public function indexCompanies()
    {
        $companies = $this->companyRepo->index();
        return $companies;
    }

    public function storeCompany($payload)
    {
        $logo = $this->uploadLogoCompany($payload);

        $attributes = $this->mapStoreCompanyPayload($payload,$logo);
        $companies = $this->companyRepo->store($attributes);
        return $logo;
    }

    public function showCompany($id)
    {
        $company = $this->companyRepo->show($id);
        return $company;
    }

    public function updateCompany($payload,$id)
    {
        $company = $this->companyRepo->show($id);
        $logo = $company->logo;
        if(Arr::get($payload,'logo')!=null){
            $this->deleteLogoCompany($company);
            $logo = $this->uploadLogoCompany($payload);
        }

        $attributes = $this->mapUpdateCompanyPayload($payload,$logo);
        
        $company = $this->companyRepo->update($company,$attributes);
        return $company;
    }

    public function destroyCompany($id)
    {
        $company = $this->companyRepo->show($id);
        $this->deleteLogoCompany($company);

        $company = $this->companyRepo->destroy($company);

        return $company;
    }

    private function mapStoreCompanyPayload($payload,$logo){
        return [
            'name'=>Arr::get($payload,'name'),
            'email'=>Arr::get($payload,'email'),
            'website'=>Arr::get($payload,'website'),
            'logo'=>$logo,
        ];
    }

    private function mapUpdateCompanyPayload($payload,$logo){
        return [
            'name'=>Arr::get($payload,'name'),
            'email'=>Arr::get($payload,'email'),
            'website'=>Arr::get($payload,'website'),
            'logo'=>$logo,
        ];
    }

    private function uploadLogoCompany($payload){
        $logo = Arr::get($payload,'logo');
        $companyLogo = $this->companyRepo->uploadLogo($logo);

        return $companyLogo;
    }

    private function deleteLogoCompany($company){
        $companyLogo = $this->companyRepo->deleteLogo($company->logo);
        return $companyLogo;
    }
}
