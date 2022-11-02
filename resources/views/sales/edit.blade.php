@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="text-center pb-1">
            <h2 class="fw-bold">Editar Cliente</h2>
        </div>
        <form class="form-control-marg" action="{{ url('/sales/'.$sales->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div>
                <input type="text" name="venta" placeholder="Ventas" value="{{ $sales->venta }}"> 
            </div>
            <div>
                <input type="text" name="created_at" placeholder="Fecha" value="{{ $sales->created_at }}"> 
            </div>
            <div>
                <input type="submit" value="Editar la venta">
            </div>
        </form>
    </div>
</div>
@endrole
@include('footer')