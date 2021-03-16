@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="center">
                <h2>Edit User</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admins.update', $user->id) }}" method="POST" >
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
<!-- profession -->
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

    <div class="col-md-6">
        <select name="role" id="role" class="form-control @error('role') is-invalid @enderror" value="{{ old('role', $user->role) }}" required autocomplete="role" autofocus>
        <option value="admin">Administrateur</option>
        <option value="stagiaire">Stagiaire</option>
        <option value="coach">Coach</option>
        </select>
        <!-- <input id="profession" type="text" class="form-control @error('profession') is-invalid @enderror" name="profession" value="{{ old('profession') }}" required autocomplete="profession" autofocus> -->

        @error('role')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-success">
                    {{ __('ADD') }}
                </button>
     <a type="button" class="btn btn-primary" href="{{ route('admins.index') }}">Go back</a>
            </div>
        </div>

    </form>
@endsection