@extends('layouts.main-layout')
@section('content')

    @auth
        <h1>{{ Auth::user() -> name }}</h1>
        <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>
        <br><br>
        @else
        <h1>If you wanne see my site you have to login/register</h1>
    @endauth
    <h1 class="text-info bg-dark">
        Sign In
    </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- register --}}
    <form action="{{ route('register') }}" method="POST">
        @method('POST')
        @csrf

        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="name"><br>
        
        <label for="email">Email: </label>
        <input type="text" name="email" placeholder="email"><br>

        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="password"><br>

        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" placeholder="password confirmation"><br>

        <br>
        <input type="submit" value="Sign In">
    
    </form>

    <br><br><hr class="bg-white"><br><br>

    <h1 class="text-info bg-dark">
        Login
    </h1>
    {{-- login --}}
    <form action="{{ route('login') }}" method="POST">
        @method('POST')
        @csrf
        
        <label for="email">Email: </label>
        <input type="text" name="email" placeholder="email"><br>

        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="password"><br>

        <br>
        <input type="submit" value="Login">
    
    </form>
    <br><br><br>

@endsection