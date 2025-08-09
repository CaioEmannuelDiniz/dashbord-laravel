@extends('layouts.admin')


@section('content')


<div class="content">
    <div class="content-title">
        <h1 class="page-title">Cadastrar Usuário</h1>
        <a href="{{route('user.index') }}" class="btn-info">Listar</a>
    </div>

    <x-alert/>

    <form action=" {{ route('user.store') }}" method="POST" class="form-container">
        @csrf

        <div class="mb-4">
            <label class="form-label" for="name">Nome:</label>
            <input class="form-input" type="text" name="name" id="name" placeholder="Nome Completo" value="{{ old('name') }}" >
        </div>

        <div class="mb-4">
            <label class="form-label" for="email">E-mail:</label>
            <input class="form-input" type="email" name="email" id="email" placeholder="Melhor email do usuário" value="{{ old('email') }}" >
        </div>
        <div class="mb-4">
            <label class="form-label" for="senha">Senha:</label>
            <input class="form-input" type="password" name="password" id="password" placeholder="Senha com no mínimo 6 caracters" value="{{ old('password') }}" >
        </div>




        <button class="btn-success" type="submit">Cadastrar</button>

    </form>
</div>




@endsection
