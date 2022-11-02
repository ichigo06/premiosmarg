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
                        <td>{{ $user->consumers->cliente }}</td>
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
        </div>
    </div>
</div>
@endrole('Administrador')
@include('footer')