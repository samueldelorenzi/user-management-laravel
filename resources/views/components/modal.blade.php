@props(['user'])

<div class="modal fade" id="modalExclusao" tabindex="-1" aria-labelledby="modalExclusaoLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalExclusaoLabel">Confirmar exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir este item? Essa ação não pode ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm fw-bold btn-outline-secondary border-2" data-bs-dismiss="modal">Cancelar</button>
                <form method="post" action="{{ route('user.destroy', ["user" => $user->id] )}}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm fw-bold btn-outline-danger border-2">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
