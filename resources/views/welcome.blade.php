<!-- call external files using extends -->
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
      <img src="/img/pizzahouse.png" alt="pizzahouse image" style="height: 250px;">
        <div class="title m-b-md">
            <p>Pizza House</p>
            <p>Kenya's Best Pizza</p>
        </div>

        
    </div>
</div>
@endsection('content')
