@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="text-center fw-bold">
            <h2>Agregar Objectivo Marg</h2>
        </div>
        @livewire('objective-user')
    </div>
</div>
@endrole('Administrador')
@include('footer')