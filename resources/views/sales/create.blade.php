@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="text-center fw-bold">
            <h2>Agregar Ventas Marg</h2>
        </div>
        @livewire('consumer-user')
    </div>
</div>
@endrole('Administrador')
@include('footer')