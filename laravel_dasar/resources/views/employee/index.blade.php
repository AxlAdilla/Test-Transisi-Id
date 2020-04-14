@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Employee</div>

                <div class="card-body">
                    <div class="d-flex flex-row justify-content-end">
                        <a href="{{route('employee.create')}}" class="btn btn-primary my-2">+ Tambah</a>
                    </div>
                    <table class="table table-striped table-responsive">
                        <thead class="text-center">
                            <tr>
                                <th>#</td>
                                <th>ID</td>
                                <th>Nama</td>
                                <th>Company</td>
                                <th>Email</td>
                                <th>Dibuat Pada</td>
                                <th>Diubah Pada</td>
                                <th colspan="3">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($employees as $employee)
                            <tr>
                                <td>{{$loop->iteration+($employees->perpage()*($employees->currentpage()-1))}}</td>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->company->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->created_at->diffForHumans()}}</td>
                                <td>{{$employee->updated_at->diffForHumans()}}</td>
                                <td><a href="{{route('employee.show',['employee'=>$employee->id])}}" class="btn btn-info btn-sm">DETAIL</a></td>
                                <td><a href="{{route('employee.edit',['employee'=>$employee->id])}}" class="btn btn-primary btn-sm">EDIT</a></td>
                                <td>
                                    <form action="{{route('employee.destroy',['employee'=>$employee->id])}}" method="post">
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
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
