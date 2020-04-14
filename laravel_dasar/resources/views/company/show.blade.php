@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">Edit Company</div>
                <div class="card-body">
                    <div class="form-group">
                        <label >Nama</label>
                        <input type="text" disabled value="{{$company->name}}" class="form-control @error('name') is-invalid @enderror" name="name">
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" disabled value="{{$company->email}}" class="form-control @error('email') is-invalid @enderror" name="email">
                    </div>
                    <div class="form-group">
                        <label >Website</label>
                        <input type="text" disabled value="{{$company->website}}" class="form-control @error('website') is-invalid @enderror" name="website">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Photo Company</div>
                <div class="card-body">
                    <img src="{{asset('storage/company/'.$company->logo)}}" style="width:100%" alt="{{$company->name}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
