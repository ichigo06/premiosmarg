@if(Auth::check())
@include('header')
@include('authentication')
@livewire('filter-date')
@livewire('first-component')
@include('footer')
@endif
