<div>
    <h3>Nuev Usuario</h3>
    <div class="row">
        <div class="col-sm-12">
            <label>Nombre</label>
            <input type="text" class="form-control">
            <small class="text-info" wire:loading>Guardando espere...</small>
        </div>

        <div class="col-sm 12 mt-2">
            <button wire:click="save" wire:loading.remove class="btn btn-primary">Guardar y Ocultarse</button>

            <button wire:click="save" wire:loading.attr="disabled" class="btn btn-secondary ml-2">Guardar y Bloquearse</button>

            <button wire:click="save" wire:loading.attr="disabled" class="btn btn-danger ml-2">
                <span wire:loading.remove>
                    Guardar y Mostrar Icono
                </span>

                <span wire:loading>
                    Procesando
                </span>
                <div wire:loading wire:target="save">
                    <i class="la la-spinner spinner"></i>
                </div>

            </button>

        </div>
    </div>
</div>