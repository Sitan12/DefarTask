@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List Users Defar Task </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}" title="add user"> <i class="fas fa-plus-circle"></i>
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
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
                <td><input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->statut ? 'checked' : '' }}></td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                        <a href="{{ route('users.show', $user->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('users.edit', $user->id) }}">
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