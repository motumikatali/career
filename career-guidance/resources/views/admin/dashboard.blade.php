@extends('layouts.app')

@section('content')
<h1>Admin Dashboard</h1>

<h3>Institutions List</h3>
<ul>
    @foreach ($institutions as $institution)
        <li>{{ $institution->name }} <form action="{{ route('admin.deleteInstitution', $institution->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form></li>
    @endforeach
</ul>

<h3>Add New Institution</h3>
<form action="{{ route('admin.addInstitution') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Institution Name" required>
    <input type="email" name="email" placeholder="Institution Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Add Institution</button>
</form>
@endsection
