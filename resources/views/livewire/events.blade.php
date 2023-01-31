<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <button onclick="confirmar(1)" class="btn btn-danger">Eliminar</button>
                    <button onclick="confirmar(1)" class="btn btn-warning">Eliminar</button>
                </td>
            </tr>

        </tbody>
    </table>


    <script>
        function confirmar(id) {
            var op = confirm("¿Deseas eliminar el registro?")
            if (op == true) {
                window.livewire.emit('destroy', id)
            }
        }

        document.addEventListener('livewire:load', function() {
            Livewire.on('destroy-result', event => {
                alert(event)
            })
        })

        window.addEventListener('destroy-result', event => {
            alert(event.detail.otro)
        })
    </script>
</div>