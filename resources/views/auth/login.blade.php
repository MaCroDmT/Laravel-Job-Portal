@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
    <h2>Admin Login</h2>

    @if($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Enter Password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p><a href="{{ route('public.jobs.index') }}">View Public Job Listings</a></p>
@endsection
