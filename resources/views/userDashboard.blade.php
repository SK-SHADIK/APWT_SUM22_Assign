@extends('layout.navbar')
@section('content')
    
<div>
    <h1>This is the USER Dashboard</h1>
</div>
<div>
    <table border=1>
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @php($i=1)
        @foreach ($user_data as $u)
        
        <tr>
            <td>{{$i}}</td>
            <td><a style="text-decoration:none" href="{{route('user.detail',['id'=>encrypt($u->id)])}}">{{$u->name}}</a></td>
            <td>{{$u->email}}</td>
        </tr>
        @php($i++)    
        @endforeach
        </tbody>
    </table>
</div>
@endsection