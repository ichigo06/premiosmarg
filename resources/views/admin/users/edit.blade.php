@include('header')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap text-center">
        <div class="text-center">
            <h2>Editar Role</h2>
        </div>
            <div class="pb-2">
                El usuario es : {{ $user->name }}
            </div>
            {!! Form::model($user ,['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
                @foreach ($roles as $role)
                <div class="">
                    <label for="">
                        <input id="typeclient5"  name="model_id" value="" type="hidden">
                        {!! Form::checkbox('roles', $role->id , null , ['class' => 'mr-1 select-type5']) !!}
                        {!! $role->name !!}
                    </label>
                </div>
                @endforeach
            {!! Form::submit('Asignar Rol', ['class' => 'button-send-role mt-2 mr-1']) !!} 
            {!! Form::close() !!}
    </div>
</div>
@endrole('Administrador')
@include('footer')