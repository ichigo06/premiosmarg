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
                        <th>Vendedor</th>
                        <th>Objetivo del mes</th>
                        <th>Fecha del objetivo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                
                <thead>
                    @foreach($objectives as $objective)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $objective->users->name }}</td>
                        <td>{{ $objective->objective }}</td> 
                        <td>{{ $objective->created_at }}</td>
                        <td>
                            <a class="button-td" href="{{ url('/objective/'.$objective->id.'/edit') }}">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('/objective/'.$objective->id) }}" method="post">
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