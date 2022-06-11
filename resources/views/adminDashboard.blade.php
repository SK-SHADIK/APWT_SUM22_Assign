@extends('layout.navbar')
@section('content')
<div>
    <h1>This is the ADMIN Dashboard</h1>
</div>
<div>
    <h4>Admin Table</h4>
    <table border=1>
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @php
           $i=1; 
        @endphp 
        @foreach ($admin_data as $a)
        
        <tr>
            <td>{{$i}}</td>
            <td><a style="text-decoration:none" href="{{route('user.detail',['id'=>encrypt($a->id)])}}">{{$a->name}}</a></td>
            <td>{{$a->email}}</td>
        </tr>
        @php
           $i++; 
        @endphp  
        @endforeach
        </tbody>
    </table>
    <br>
    <h4>Users Table</h4>
    <table>
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; ?>
        @foreach ($user_data as $u)
        
        <tr>
            <td>{{$i}}</td>
            <td><a style="text-decoration:none" href="{{route('user.detail',['id'=>encrypt($u->id)])}}">{{$u->name}}</a></td>
            <td>{{$u->email}}</td>
        </tr>
        <?php $i++; ?>    
        @endforeach
        </tbody>
    </table>
</div>
@endsection