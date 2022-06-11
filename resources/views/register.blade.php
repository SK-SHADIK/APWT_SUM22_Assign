<style>
    error{
        color:red;
    }
</style>
@extends('layout.navbar1')
@section('content')

<div>

<form action="{{route('submit.registration')}}" method="POST">
    {{ csrf_field() }}
    <h3>Registration</h3>
    <hr>
    <br>
    @if (Session::has('fail'))
        <div>{{Session::get('fail')}}</div>
    @endif
    <label>Name</label>
    <input type="text" name="name" value="{{old('name')}}" placeholder="Enter Your Name">
    @error('name')
    <span class="error">{{$message}}</span>
    @enderror
    <br><br>
    <label>Email</label>
    <input type="text" name="email" value="{{old('email')}}" placeholder="Enter Your Email">
    @error('email')
    <span class="error">{{$message}}</span>
    @enderror
    <br><br>
    <label>Password</label>
    <input type="password" name="psw" value="{{old('psw')}}" placeholder="Enter Password">
    @error('psw')
    <span class="error">{{$message}}</span>
    @enderror
    <br><br>
    <label>Repeat Password</label>
    <input type="password" name="psw_repeat" value="{{old('psw_repeat')}}"  placeholder="Re-entry Password">
    @error('psw_repeat')
    <span class="error">{{$message}}</span>
    @enderror
    <br><br>
    
    <button type="submit">Sign Up</button>
    </div>

    <div>
        <p>I already have an account? <a href="{{route('user.login')}}">Login</a></p>
    </div>
  </form>
</div>

@endsection