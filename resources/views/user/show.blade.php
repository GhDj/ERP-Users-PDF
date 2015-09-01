@extends('layouts.master')

@section('content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th> <th>Name</th><th>Email</th><th>Role</th><th>Password</th>
            </tr>
            <tr>
                <td>{{ $user->id }}</td> <td> {{ $user->name }} </td><td> {{ $user->email }} </td><td> 
	                @if ($user->role == 1) Admin
	                @else 
	                Chef d'entreprise 
	                @endif
	                </td><td> {{ $user->password }} </td>
            </tr>
        </table>
    </div>

@endsection
