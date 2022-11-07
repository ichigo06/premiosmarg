@include('header')
@include('authentication')
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="table-content">
            @livewire('searchconsumers')
        </div>
    </div>
</div>
@endrole('Administrador')
@include('footer')