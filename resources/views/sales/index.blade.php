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
                        <th>Usuario</th>
                        <th>Venta del usuario</th>
                        <th>Fecha creado</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                
                <thead>
                    @foreach($sales as $sale)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sale->consumers->cliente }}</td>
                        <td>{{ $sale->users->name }}</td>
                        <td>{{ $sale->venta }}</td>
                        <td>{{ $sale->created_at }}</td>
                        <td>
                            <a class="button-td" href="{{ url('/sales/'.$sale->id.'/edit') }}">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('/sales/'.$sale->id) }}" method="post">
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


            