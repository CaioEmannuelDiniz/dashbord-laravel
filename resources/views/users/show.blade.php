@extends('layouts.admin')


@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Detalhes do Usuário</h1>
            <span class="flex space-x-1">
                <a href="{{ route('user.index') }}" class="btn-info">Listar</a>
                <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn-warning">Editar</a>
                <a href="{{ route('user.editPassword', ['user' => $user->id]) }}" class="btn-alert">Editar a senha</a>

                <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit " class="btn-danger"
                        onclick="return confirm('Tem certeza que gostaria de apagar esse registro?')">Apagar</button>
                </form>
            </span>
        </div>

        <x-alert />

        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Informações do Usuário</h2>
            <div class="text-gray-700">
                <div class="mb-1">
                    <span class="font-bold">ID:</span>
                    <span>{{ $user->id }}</span>
                </div>
                <div class="mb-1">
                    <span class="font-bold">Nome:</span>
                    <span>{{ $user->name }}</span>
                </div>
                <div class="mb-1">
                    <span class="font-bold">Email:</span>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="mb-1">
                    <span class="font-bold">Cadastrado em:</span>
                    <span>{{ $user->created_at->setTimezone('America/Fortaleza')->format('d/m/Y H:i') }}</span>
                </div>
                <div class="mb-1">
                    <span class="font-bold">Editado em:</span>
                    <span>{{ $user->updated_at->setTimezone('America/Fortaleza')->format('d/m/Y H:i') }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
