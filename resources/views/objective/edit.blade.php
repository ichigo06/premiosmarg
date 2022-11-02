@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="text-center pb-1">
            <h2 class="fw-bold">Editar Objetivo</h2>
        </div>
        <form class="form-control-marg" action="{{ url('/objective/'.$objective->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div>
                <input type="text" name="objective" placeholder="Ventas" value="{{ $objective->objective }}"> 
            </div>
            <div>
                <input type="text" name="created_at" placeholder="Fecha" value="{{ $objective->created_at }}"> 
            </div>
            <div>
                <input type="submit" value="Editar la venta">
            </div>
        </form>
    </div>
</div>
@endrole
@include('footer')