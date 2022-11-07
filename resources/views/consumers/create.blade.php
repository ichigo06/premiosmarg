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
        <form class="form-control-marg pb-1" name="f1" action="{{ url('/consumers') }}" method="post" id="f1">
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
                <input type="hidden" name="zona" placeholder="Zona" value="" id="zone"> 
                <select name="" id="zone-select" class="mb-3">
                    <option value="No seleccionaste ninguna zona">Seleccionar zona</option>
                    <option value="Lima Norte">Lima Norte</option>
                    <option value="Lima Sur">Lima Sur</option>
                    <option value="Lima Este">Lima Este</option>
                    <option value="Lima Centro">Lima Centro</option>
                </select>
            </div>
            <div class="mb-3">
                @if($errors->has('region'))
                    <span class="error text-danger">{{$errors->first('region') }}</span>
                @endif  
                <input type="hidden" id="select-d" name="region"></input>
                <select class="select-departament select2-departament  departament select-departament-2" name="" id="departamentos" onchange="cambia_departamento()">
                    <option value="0">Seleccione Departamentos</option>
                    <option value="Lima">Lima</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Áncash">Áncash</option>
                    <option value="Apurímac">Apurímac</option>
                    <option value="Arequipa">Arequipa</option>
                    <option value="Ayacucho">Ayacucho</option>
                    <option value="Cajamarca">Cajamarca</option>
                    <option value="Callao">Callao</option>
                    <option value="Cusco">Cusco</option>
                    <option value="Huancavelica">Huancavelica</option>
                    <option value="Huánuco">Huánuco</option>
                    <option value="Ica">Ica</option>
                    <option value="Junín">Junín</option>
                    <option value="La Libertad">La Libertad</option>
                    <option value="Lambayeque">Lambayeque</option>
                    <option value="Loreto">Loreto</option>
                    <option value="Madre de Dios">Madre de Dios</option>
                    <option value="Moquegua">Moquegua</option>
                    <option value="Pasco">Pasco</option>
                    <option value="Piura">Piura</option>
                    <option value="Puno">Puno</option>
                    <option value="San Martín">San Martín</option>
                    <option value="Tacna">Tacna</option>
                    <option value="Tumbes">Tumbes</option>
                    <option value="Ucayali">Ucayali</option>
                </select>
 
            </div>
            <div class="select-jugger mb-3">
                @if($errors->has('distrito'))
                    <span class="error text-danger">{{$errors->first('distrito') }}</span>
                @endif  
            </div>
            <div>
                <input class="button" type="submit" value="Agregar Cliente">
            </div>
        </form>
    </div>
</div>
@endrole
@include('footer')