@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">{{ __('Defar Task Application') }}</div>

                <div class="card-body bg-info">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Defar Task est une application qui permet aux defarsciens de partager ses differents projets avec leurs descriptions.') }}
                   <br> {{ __('Utiliser Defar Task pour le bon suivi de vos projets. ') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
