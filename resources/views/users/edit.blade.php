@extends('layouts.admin')


@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Editar Usuário</h1>
            <span>
                <a href="{{ route('user.index') }}" class="btn-info">Listar</a>
                <a href="{{ route('user.editPassword', ['user' => $user->id]) }}" class="btn-alert">Editar a senha</a>
                <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn-primary">Vsiaulizar</a>
            </span>
        </div>

        <x-alert />


        <form action=" {{ route('user.update', ['user' => $user->id]) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="form-label" for="name">Nome:</label>
                <input class="form-input" type="text" name="name" id="name" placeholder="Nome Completo"
                    value="{{ old('name', $user->name) }}">
            </div>

            <div class="mb-4">
                <label class="form-label" for="email">E-mail:</label>
                <input class="form-input" type="email" name="email" id="email" placeholder="Melhor email do usuário"
                    value="{{ old('email', $user->email) }}">
            </div>


            <button class="btn-warning" type="submit">Salvar</button>

        </form>


    </div>
@endsection
