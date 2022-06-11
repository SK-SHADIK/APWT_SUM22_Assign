<style>
    error{
        color:red;
    }
</style>
@extends('layout.navbar1')
@section('content')
<br>
<div>
    <form action="{{route('submit.login')}}" method="POST">
        {{ csrf_field() }}
        <h3>Login</h3>
        <br>
        @if (Session::has('fail'))
            <div class="error">{{Session::get('fail')}}</div>
        @endif

        <!-- Email input -->
        <div>
        @error('email')
            <span class="error">{{$message}}</span>
        @enderror
        <input type="email" name="email" value="{{old('email')}}"/>
        <label class="form-label">Email address</label>
        </div>
    
        <!-- Password input -->
        <div>
        @error('pass')
            <span class="error">{{$message}}</span>
        @enderror
        <input type="password" name="pass" value="{{old('pass')}}"/>
        <label class="form-label">Password</label>
        </div>

        <!-- Submit button -->
        <button type="submit">Sign in</button>
    
        <!-- Register buttons -->
        <div>
        <p>I don't have an account? <a href="{{route('user.registration')}}">Register</a></p>
        </div>
    </form>
</div>
@endsection