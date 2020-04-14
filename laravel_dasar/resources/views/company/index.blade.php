@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Company</div>

                <div class="card-body">
                    <div class="d-flex flex-row justify-content-end">
                        <a href="{{route('company.create')}}" class="btn btn-primary my-2">+ Tambah</a>
                    </div>
                    <table class="table table-striped table-responsive">
                        <thead class="text-center">
                            <tr>
                                <th>#</td>
                                <th>ID</td>
                                <th>Nama</td>
                                <th>Email</td>
                                <th>Logo</td>
                                <th>Website</td>
                                <th>Dibuat Pada</td>
                                <th>Diubah Pada</td>
                                <th colspan="2">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($companies as $company)
                            <tr>
                                <td>{{$loop->iteration+($companies->perpage()*($companies->currentpage()-1))}}</td>
                                <td>{{$company->id}}</td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}}</td>
                                <td><img src="{{asset('storage/company/'.$company->logo)}}" width="50" height="50" alt="{{$company->name}}"></td>
                                <td>{{$company->website}}</td>
                                <td>{{$company->created_at->diffForHumans()}}</td>
                                <td>{{$company->updated_at->diffForHumans()}}</td>
                                <td><a href="{{route('company.edit',['company'=>$company->id])}}" class="btn btn-primary btn-sm">EDIT</a></td>
                                <td>
                                    <form action="{{route('company.destroy',['company'=>$company->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="10">Data Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
