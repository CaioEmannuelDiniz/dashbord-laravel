@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="content-title">
        <h1 class="page-title">Alterar Senha</h1>
        <a href="{{ route('user.index') }}" class="btn-info">Listar</a>
    </div>

    <x-alert />

    <form action="{{ route('user.updatePassword', $user->id) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="form-label" for="current_password">Senha Atual:</label>
            <input class="form-input" type="password" name="current_password" id="current_password" required>
        </div>

        <div class="mb-4">
            <label class="form-label" for="password">Nova Senha:</label>
            <input class="form-input" type="password" name="password" id="password" required>
        </div>

        <div class="mb-4">
            <label class="form-label" for="password_confirmation">Confirmar Nova Senha:</label>
            <input class="form-input" type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button class="btn-warning" type="submit">Salvar Senha</button>
    </form>
</div>
@endsection
