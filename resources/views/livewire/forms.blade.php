    <div>
        <h3 class="text-center font-weight-bold">Registrar Usuario</h3>
        <div class="row mt-2">
            <div class="col-sm-12 col-md-4">
                <label>Nombre</label>
                <input wire:model="name" type="text" class="form-control">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="col-sm-12 col-md-4">
                <label>Email</label>
                <input wire:model="email" type="text" class="form-control">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="col-sm-12 col-md-4">
                <label>Password</label>
                <input wire:model="password" type="password" class="form-control">
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-sm-12 col-md-4">
                <label>Elegir imagen</label>
                <input wire:model="photo" accept="image/x-png,image/jpeg,image/jpg" class="form-control" type="file">
            </div>
            <div class="col-sm-12 col-md-4 mt-2">
                @if( $photo )
                <img src="{{ $photo->temporaryUrl() }}" height="150px">
                @endif

            </div>

            <div class="col-sm-12 mt-3">
                <button wire:click="Store" class="btn btn-primary">Registrar</button>
            </div>
        </div>

        <script>
            window.addEventListener('user-register', event => {
                alert(event.detail.result)
            })
        </script>

    </div>