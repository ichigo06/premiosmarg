<div>
    <input type="text" placeholder="Buscar" wire:model="searchusers" id="searchusers">
    <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Ruc</th>
                        <th>Distrito</th>
                        <th>Zona</th>
                        <th>Region</th>
                        <th>Accion Editar</th>
                        <th>Accion Borrar</th>  
                    </tr>
                </thead>
                
                <thead>
                    @foreach($consumers as $consumer )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $consumer->cliente }}</td>
                        <td>{{ $consumer->ruc }}</td>
                        <td>{{ $consumer->distrito }}</td>
                        <td>{{ $consumer->zona }}</td>
                        <td>{{ $consumer->region }}</td>
                        <td>
                            <a class="button-td" href="{{ url('/consumers/'.$consumer->id.'/edit') }}">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('/consumers/'.$consumer->id) }}" method="post">
                                {{ csrf_field( )}}
                                {{ method_field('DELETE') }}
                                <button class="button-td" type="submit" onclick="return confirm('¿ Borrar ?');">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        {{ $consumers->links() }}
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
        </style>
</div>
