@include('header')
@include('authentication')
@if(Auth::check())
@role('Administrador')
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Hola bienvenido {{ Auth::user()->name }}</h2>
                </div>
                <div class="col-12 text-center">
                    <div>
                        <img src="{{ asset('img/administradormarg.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endrole
@role('Vendedor')
@if(Auth::check())
<div id="content" class="page-content">
    <div class="page-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-2">
                    <h2>Hola bienvenido(@) {{ Auth::user()->name }}</h2>
                </div>
                <div class="col-12 text-center">
                    <div class="seller_dashboard">
                        <img src="{{ asset('img/vendedormarg.png') }}" alt="">
                    </div>
                    <div class="seller_button">
                        <a href="{{ url('seller') }}">Ir a mis objetivos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endrole('Vendedor')
@include('footer')
