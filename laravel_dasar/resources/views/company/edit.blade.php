@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">Edit Company</div>
                <div class="card-body">
                    <form action="{{route('company.update',['company'=>$company->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{$company->id}}">
                        <div class="form-group">
                            <label >Nama</label>
                            <input type="text" value="{{$company->name}}" class="form-control @error('name') is-invalid @enderror" name="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" value="{{$company->email}}" class="form-control @error('email') is-invalid @enderror" name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Change Logo</label>
                            <!-- <div class="custom-file"> -->
                                <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" id="customFile">
                                <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>
                        <div class="form-group">
                            <label >Website</label>
                            <input type="text" value="{{$company->website}}" class="form-control @error('website') is-invalid @enderror" name="website">
                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block">
                        </div>
                        @csrf
                    </form>
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
