@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List Users Defar Task </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admins.create') }}" title="add user"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Role</th>
            <th>E-mail</th>
            <th>Action</th>
        </tr>
        @foreach ($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->role }}</td>
                <td>{{ $data->email }}</td>
                 
                
                <td>
                    <form action="{{ route('admins.destroy', $data->id) }}" method="POST">

                        <a href="{{ route('admins.show', $data->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('admins.edit', $data->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

   


@endsection