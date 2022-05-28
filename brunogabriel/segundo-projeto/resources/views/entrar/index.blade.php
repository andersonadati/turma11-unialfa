@extends('layout')

@section('title', 'Entrar')

@section('cabecalho')
    Entrar
@endsection


@section('conteudo')
    <form action="/entrar" method="POST">
        @csrf
        <div class="form-control">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required class="form-control">
        </div>

        <div class="form-control">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
        <a href="/registrar" class="btn btn-secondary mt-3">Registrar-se</a>
    </form>
@endsection
