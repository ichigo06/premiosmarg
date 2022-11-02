@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="text-center fw-bold">
            <h2>Agregar Clientes Marg</h2>
        </div>
        <div>
        </div>
        <form class="form-control-marg pb-1" action="{{ url('/consumers') }}" method="post">
            {{ csrf_field() }}
            <div>
                @if($errors->has('cliente'))
                    <span class="error text-danger">{{$errors->first('cliente') }}</span>
                @endif 
                <input type="text" name="cliente" placeholder="Nombre de la empresa" value=""> 
            </div>
            <div>
                @if($errors->has('ruc'))
                    <span class="error text-danger">{{$errors->first('ruc') }}</span>
                @endif 
                <input type="text" name="ruc" placeholder="RUC de la empresa" value=""> 
            </div>
            <div>
                @if($errors->has('zona'))
                    <span class="error text-danger">{{$errors->first('zona') }}</span>
                @endif  
                <input type="text" name="zona" placeholder="Zona" value=""> 
            </div>
            <div>
                @if($errors->has('region'))
                    <span class="error text-danger">{{$errors->first('region') }}</span>
                @endif  
                <input type="text" name="region" placeholder="Region" value=""> 
            </div>
            <div>
                @if($errors->has('distrito'))
                    <span class="error text-danger">{{$errors->first('distrito') }}</span>
                @endif  
                <input type="text" name="distrito" placeholder="Distrito" value=""> 
            </div>
            <div>
                <input class="button" type="submit" value="Agregar Cliente">
            </div>
        </form>
    </div>
</div>
@endrole
@include('footer')