@extends("layouts.admin")

@section("content")
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Listar usuários</span>
            <span class="ms-auto">
                <a class="btn btn-sm fw-bold btn-outline-success border-2" href="{{ route('user.create') }}">Criar usuário</a>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>

                @forelse($users as $user)
                    <tr>
                        <th class="align-middle">{{ $user->id }}</th>
                        <td class="align-middle">{{ $user->name }}</td>
                        <td class="align-middle">{{ $user->email }}</td>
                        <td class="align-middle">
                            <a href="{{ route('user.show', ["user" => $user->id]) }}" class="btn fw-bold btn-sm btn-outline-primary border-2 w-25">Ver</a>
                            <a href="{{ route('user.edit', ["user" => $user->id]) }}" class="btn fw-bold btn-sm btn-outline-warning border-2 w-25">Editar</a>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalExclusao" class="btn fw-bold btn-sm btn-outline-danger border-2 w-25">Excluir</button>
                        </td>
                    </tr>
                    <x-modal :user="$user" />
                @empty
                    <tr>
                        <td colspan="4" class="text-center align-middle">Nenhum usuário cadastrado.</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
