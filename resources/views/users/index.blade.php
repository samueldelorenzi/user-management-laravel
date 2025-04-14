@extends("layouts.admin")

@section("content")
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Início</span>
        </div>

        <div class="card-body text-center p-5">
            <h2 class="mb-4 fw-bold text-dark">Gerenciamento de Usuários</h2>
            <p class="lead text-secondary mb-5 mx-auto" style="max-width: 600px;">
                Projeto full-stack desenvolvido para aprimorar habilidades com as seguintes tecnologias:
            </p>

            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <div class="tech-icon">
                    <img src="https://skillicons.dev/icons?i=laravel"
                         alt="Laravel"
                         class="img-fluid"
                         width="80"
                         height="80"
                         data-bs-toggle="tooltip"
                         title="Laravel">
                    <p class="mt-2 mb-0 small text-muted">Laravel</p>
                </div>
                <div class="tech-icon">
                    <img src="https://skillicons.dev/icons?i=php"
                         alt="PHP"
                         class="img-fluid"
                         width="80"
                         height="80"
                         data-bs-toggle="tooltip"
                         title="PHP">
                    <p class="mt-2 mb-0 small text-muted">PHP</p>
                </div>
                <div class="tech-icon">
                    <img src="https://skillicons.dev/icons?i=vite"
                         alt="Vite.js"
                         class="img-fluid"
                         width="80"
                         height="80"
                         data-bs-toggle="tooltip"
                         title="Vite.js">
                    <p class="mt-2 mb-0 small text-muted">Vite.js</p>
                </div>
                <div class="tech-icon">
                    <img src="https://skillicons.dev/icons?i=bootstrap"
                         alt="Bootstrap"
                         class="img-fluid"
                         width="80"
                         height="80"
                         data-bs-toggle="tooltip"
                         title="Bootstrap">
                    <p class="mt-2 mb-0 small text-muted">Bootstrap</p>
                </div>
            </div>
        </div>
    </div>
@endsection
