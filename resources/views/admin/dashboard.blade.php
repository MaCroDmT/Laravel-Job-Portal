@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <h2>Welcome, Admin!</h2>

    <div>
        <a href="{{ route('jobs.create') }}">Add New Job</a><br>
    </div>

    <div>
        <a href="{{ route('jobs.index') }}">View All Jobs</a>
    </div>

    <div style="margin-top: 15px;">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-link">Logout</button>
        </form>
    </div>

    <div class="profile-info">
        <p><strong>Job Portal developed by:</strong></p>
        <p><strong>Prottoy Saha</strong> </p>
        <p><strong>AIUB</strong> </p>
        <ul class="contact-list">
            <li>GitHub: <a href="https://github.com/MaCroDmT" target="_blank" rel="noopener noreferrer">github.com/MaCroDmT</a></li>
            <li>LinkedIn: <a href="https://www.linkedin.com/in/prottoy-saha-736097357/" target="_blank" rel="noopener noreferrer">www.linkedin.com/in/prottoy-saha-736097357/</a></li>
            <li>Mail: <a href="mailto:prottoys28@gmail.com">prottoys28@gmail.com</a></li>
            <li>Mobile: <a href="tel:+8801745547578">+8801745547578</a></li>
            <li>Portfolio: <a href="https://sites.google.com/view/prottoy21" target="_blank" rel="noopener noreferrer">sites.google.com/view/prottoy21</a></li>
            <li>ResearchGate: <a href="https://www.researchgate.net/profile/Prottoy-Saha-3?ev=hdr_xprf" target="_blank" rel="noopener noreferrer">researchgate.net/profile/Prottoy-Saha-3</a></li>
           
        </ul>
    </div>
@endsection
