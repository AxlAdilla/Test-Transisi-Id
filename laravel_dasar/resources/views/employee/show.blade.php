@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Show Employee</div>
                <div class="card-body">
                    <div class="form-group">
                        <label >Nama</label>
                        <input type="text" disabled value="{{$employee->name}}" class="form-control @error('name') is-invalid @enderror" name="name">
                    </div>
                    <div class="form-group">
                        <label >Company</label>
                        <input type="text" disabled value="{{$employee->company->name}}" class="form-control @error('name') is-invalid @enderror" name="name">
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" disabled value="{{$employee->email}}" class="form-control @error('email') is-invalid @enderror" name="email">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
