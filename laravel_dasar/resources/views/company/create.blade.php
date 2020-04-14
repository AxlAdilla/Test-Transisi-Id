@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Create Company</div>

                <div class="card-body">
                    <form action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label >Nama</label>
                            <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Logo</label>
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
                            <input type="text" value="{{old('website')}}" class="form-control @error('website') is-invalid @enderror" name="website">
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
    </div>
</div>
@endsection
