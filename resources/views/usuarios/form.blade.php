@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('usuarios') }}"></a>Voltar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- @if( Request::is('*/edit'))
                    <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome: </label>
                            <input type="text" name="name" class="form-control" value="{{$usuario->name}}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email: </label>
                            <input type="email" name="email" class="form-control" value="{{$usuario->email}}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telefone: </label>
                            <input type="phone" name="phone" class="form-control" value="{{$usuario->phone}}">

                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    @else -->

                    <form action="{{ url('usuarios/add') }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome: </label>
                            <input type="text" name="name" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email: </label>
                            <input type="email" name="email" class="form-control">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telefone: </label>
                            <input type="phone" name="phone" class="form-control">

                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
