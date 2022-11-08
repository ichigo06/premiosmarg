@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="text-center pb-1">
            <h2 class="fw-bold">Editar Cliente</h2>
        </div>
        <form class="form-control-marg" action="{{ url('/consumers/'.$consumers->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div>
                <input type="text" name="cliente" placeholder="Nombre de la empresa" value="{{ $consumers->cliente }}"> 
            </div>
            <div>
                <input type="text" name="ruc" placeholder="RUC de la empresa" value="{{ $consumers->ruc }}"> 
            </div>
            <div>
                <input type="text" name="distrito" placeholder="distrito" value="{{ $consumers->distrito }}"> 
            </div>
            <div>
                <input type="text" name="zona" placeholder="zona" value="{{ $consumers->zona }}"> 
            </div>
            <div>
                <input type="text" name="region" placeholder="Region" value="{{ $consumers->region }}"> 
            </div>
            <div>
                <input type="submit" value="Editar Cliente">
            </div>
        </form>
    </div>
</div>
@endrole
@include('footer')