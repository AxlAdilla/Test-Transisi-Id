@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <a href="{{route('company.index')}}">
                <div class="card">
                    <div class="card-body text-center">
                        <h1>{{$companies->total()}}</h1>
                        <div>
                            Dashboard Company
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6">
            <a href="{{route('employee.index')}}">
                <div class="card">
                    <div class="card-body text-center">
                        <h1>{{$employees->total()}}</h1>
                        <div>
                            Dashboard Employee
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection