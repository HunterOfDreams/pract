@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Користувачі</h1>
            <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Name of organization</th>
                            <th>Email</th>
                        </tr>
                        
                        @foreach ($user as $n ):
                        <tr>
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->username }} {{ $n->surname }}</td>
                            <td>{{ $n->organisation }}</td>
                            <td>{{ $n->email }}</td>
                        </tr>
                        @endforeach
                        
            </table>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection