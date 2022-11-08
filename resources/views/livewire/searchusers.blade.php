<div>
    <input type="text" placeholder="Buscar" wire:model="searchusers" id="searchusers">
    <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Zona</th>
                    <th>Nombres y apellidos</th>
                    <th>Correo Electrónico</th>
                    <th>DNI</th>
                    <th>Whatsapp</th>
                    <th>Teléfono</th>
                    <th>Accion Editar</th>
                    <th>Accion Borrar</th>
                </tr>
            </thead>
            
            <thead>
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->cliente }}</td>
                    <td>{{ $user->zona }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->dni }}</td>
                    <td>{{ $user->whatsapp }}</td>
                    <td>{{ $user->tel }}</td>
                    <td>
                        <a class="button-td" href="{{ url('/users/'.$user->id.'/edit') }}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ url('/users/'.$user->id) }}" method="post">
                            {{ csrf_field( )}}
                            {{ method_field('DELETE') }}
                            <button class="button-td" type="submit" onclick="return confirm('¿ Borrar ?');">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </thead>
        </table>
        {{ $users->links() }}
        <style>
            #searchusers {
                border: 1px solid #2A81B4;
                margin-bottom: 20px;
                margin-left: 15px;
                padding: 5px 10px;
            }
            #searchusers::placeholder {
                color: #2A81B4;
            }
            #searchusers:focus-visible{
                outline-color: #2A81B4;
            }
            /* purgecss start ignore */

        </style>
</div>
