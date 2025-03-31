@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Dashboard</h2>
        <p>Welcome, Admin!</p>
        <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

    </div>
@endsection
