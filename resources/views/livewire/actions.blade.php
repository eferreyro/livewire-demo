<div>
    <label for="">Nombre</label>
    <input wire:keydown.enter="$set('nombre','Fax')" type="text">
    <br>
    <button wire:click="cambiarNombre('Melisa')">Cambiar</button>
    Nombre: {{$nombre}}
</div>