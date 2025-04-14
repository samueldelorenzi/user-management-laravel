@extends("layouts.admin")

@section("content")

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Editar usuário</span>
            <span class="ms-auto">
                <a href="#" onclick="if(document.referrer) { window.history.back(); } else { window.location.href='{{ route('user.list') }}'; }" class="btn btn-sm fw-bold btn-outline-warning border-2">Voltar</a>
            </span>
        </div>

        <div class="card-body">
            <form action="{{ route("user.update", ["user" => $user->id]) }}" method="post" class="row g-3">
                @csrf
                @method("PUT")

                <div class="col-md-12">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" id="name" name="name" value="{{ old("name", $user->name) }}" placeholder="Nome completo" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label class="form-label" for="email">E-mail:</label>
                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="E-mail" value="{{ old("email", $user->email) }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="password">Senha:</label>
                    <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Senha com no mínimo 6 caracteres">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm fw-bold btn-outline-success border-2">Atualizar</button>
                </div>
            </form>
        </div>

    </div>

@endsection
