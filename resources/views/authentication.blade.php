@if(Auth::check())
<header  class="header">
    <div class="header__content">
        <div class="header__content__wrap">
            <img class="header__content__wrap__img" width="30px" height="auto" src="{{ asset('images/user-image.png') }}" />
            <span>
                    <a href=""><span class="header__content__wrap__user fw-bold d-block">{{ Auth::user()->name }}</span></a>
                    <span class="header__content__wrap__user d-block">{{ Auth::user()->email }}</span>
                <form class="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Cerrar Sesión') }}
                    </x-responsive-nav-link>
                </form>
            </span>
        </div>
    </div>
</header>
@else
<div id="content" class="page-content">

    <div class="page-content-wrap">
        <div class="text-center pb-1">
            <h2 class="fw-bold">Acceso VENTASMARG</h2>
        </div>
        <form class="form-login-marg" method="POST" action="{{ route('login') }}">
            @csrf
                    <!-- Session Status -->
            <x-auth-session-status class="mb-4 form-login-label" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 form-login-label" :errors="$errors" />
            <!-- Email Address -->
            <div>
                <x-label class="form-login-label" for="email" :value="__('Correo Electrónico')" />

                <x-input class="form-login-label" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label class="form-login-label"  for="password" :value="__('Contraseña')" />

                <x-input class="form-login-label" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar Contraseña') }}</span>
                </label>
            </div>

            <div class="d-flex justify-content-center w-100 mt-4">
                <!-- @if (Route::has('password.request'))
                    <a class="underline forget-password text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif -->

                <x-button class="ml-3 form-login-button">
                    {{ __('Acceder') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
@endif