@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="table-content">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Ruc</th>
                        <th>Distrito</th>
                        <th>Region</th>
                        <th>Zona</th>
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
                        <td>{{ $consumer->region }}</td>
                        <td>{{ $consumer->zona }}</td>
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
        </div>
    </div>
</div>
@endrole('Administrador')
@include('footer')