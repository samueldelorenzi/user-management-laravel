@extends("layouts.admin")

@section("content")
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Visualizar usuário</span>
            <span class="ms-auto">
                <a href="#" onclick="if(document.referrer) { window.history.back(); } else { window.location.href='{{ route('user.list') }}'; }" class="btn btn-sm fw-bold btn-outline-warning border-2">Voltar</a>
                <a href="{{ route('user.edit', ["user" => $user->id]) }}" class="btn btn-sm fw-bold btn-outline-info border-2">Editar</a>
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalExclusao" class="btn btn-sm fw-bold btn-outline-danger border-2">Excluir</button>
            </span>
        </div>

        <div class="card-body">
            <x-alert/>

            <dl class="row">
                <dt class="col-sm-3">#</dt>
                <dd class="col-sm-9">{{ $user->id }}</dd>
                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9">{{ $user->name }}</dd>
                <dt class="col-sm-3">E-mail</dt>
                <dd class="col-sm-9">{{ $user->email }}</dd>
                <dt class="col-sm-3">Criado em:</dt>
                <dd class="col-sm-9">{{ date_format($user->created_at, "d/m/Y H:i:s") }}</dd>
                <dt class="col-sm-3">Atualizado em:</dt>
                <dd class="col-sm-9">{{ date_format($user->updated_at, "d/m/Y H:i:s") }}</dd>
            </dl>
        </div>
    </div>
    <x-modal :user="$user" />
@endsection
