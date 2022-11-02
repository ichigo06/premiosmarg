<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @livewireStyles
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/443c76b510.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Ventas Marg</title>
</head>
<body>
    <div id="">
        <nav class="nav">
            <div class="nav__content">
                <div>
                    <img src="" />
                </div>
                <div>
                    <ul class="nav__content__list">
                        @role('Administrador')
                        <li class="nav__content__list__item option__title">Clientes Marg</li>
                        <li class="nav__content__list__item"><a href="{{ url('consumers/create') }}"><i class="fa-solid fa-user"></i>Agregar Clientes</a></li>
                        <li class="nav__content__list__item"><a href="{{ url('consumers') }}"><i class="fa-duotone fa fa-users"></i>Lista de clientes</a></li>
                        <li class="nav__content__list__item option__title">Usuarios Marg</li>
                        <li class="nav__content__list__item"><a href="{{ url('users/create') }}"><i class="fa-solid fa-user"></i>Agregar usuario</a></li>
                        <li class="nav__content__list__item"><a href="{{ url('objective/create') }}"><i class="fa-solid fa-user"></i>Agregar Objetivo</a></li>
                        <li class="nav__content__list__item"><a href="{{ url('users') }}"><i class="fa-duotone fa fa-users"></i>Lista de usuarios</a></li>
                        <li class="nav__content__list__item"><a href="{{ url('objective') }}"><i class="fa-duotone fa fa-users"></i>Lista de objetivos</a></li>
                        <li class="nav__content__list__item option__title">Ventas Marg</li>
                        <li class="nav__content__list__item"><a href="{{ url('sales/create') }}"><i class="fa-solid fa-box"></i>Agregar ventas marg</a></li>
                        <li class="nav__content__list__item"><a href="{{ url('sales') }}"><i class="fa-solid fa-boxes-stacked"></i>Lista de ventas marg</a></li>
                        <li class="nav__content__list__item option__title">Objetivos</li>
                        <li class="nav__content__list__item"><a href="{{ url('seller') }}"><i class="fa-solid fa-box"></i>Avances de ventas</a></li>
                        @endrole
                        @role('Vendedor')
                        <li class="nav__content__list__item option__title">Tus objetivos</li>
                        <li class="nav__content__list__item"><a href="{{ url('seller') }}"><i class="fa-solid fa-user"></i>Ir a tus objetivos</a></li>
                        @endrole('Vendedor')                   
                    </ul>
                </div>
            </div>
        </nav>   
    </div>
