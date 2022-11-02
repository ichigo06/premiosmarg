@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="text-center pb-1">
            <h2 class="fw-bold">Agregar Usuarios MARG</h2>
        </div>
        <form class="form-control-marg" action="{{ url('users') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="pb-3">
                @if($errors->has('id_consumers'))
                    <span class="error text-danger">{{$errors->first('id_consumers') }}</span>
                @endif 
                <input id="typeclient"  name="id_consumers" value="" type="hidden">
                <select  class="form-marg-client form-control select-type">
                    <option value="0">Seleccionar cliente MARG</option>
                @foreach($consumers as $consumer)
                    <option value="{{ $consumer->id }}">{{ $consumer->cliente }}</option>
                @endforeach
                </select>
            </div>
            <div>
                @if($errors->has('name'))
                    <span class="error text-danger">{{$errors->first('name') }}</span>
                @endif
                <input type="text" name="name" placeholder="Agregar nombres y apellidos" id="dates" value=""> 
            </div>
            <div>
                @if($errors->has('dni'))
                    <span class="error text-danger">{{$errors->first('dni') }}</span>
                @endif
                <input type="text" name="dni" placeholder="DNI"  id="dni" value=""> 
            </div>
            <div>
                <input class="button" id="sendText"  type="button" value="Generar contraseña">
            </div>
            <div>
                @if($errors->has('password'))
                    <span class="error text-danger">{{$errors->first('password') }}</span>
                @endif 
                <input type="password" name="password" placeholder="Introducir Contraseña" readonly id="password" value=""> 
            </div>
            <div>
                @if($errors->has('email'))
                    <span class="error text-danger">{{$errors->first('email') }}</span>
                @endif 
                <input type="text" name="email" placeholder="Agregar Correo Electrónico" id="email" value=""> 
            </div>
            <div>
                @if($errors->has('whatsapp'))
                    <span class="error text-danger">{{$errors->first('whatsapp') }}</span>
                @endif 
                <input type="text" name="whatsapp" placeholder="Agregar Whatsapp" id="wsp" value=""> 
            </div>
            <div>
                @if($errors->has('tel'))
                    <span class="error text-danger">{{$errors->first('tel') }}</span>
                @endif 
                <input type="text" name="tel" placeholder="Agregar Télefono" id="tel" value=""> 
            </div>
            <div>
                <input class="button" type="submit" value="Agregar">
            </div>
        </form>
    </div>
</div>
@endrole('Administrador')
@include('footer')