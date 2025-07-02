<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Listings</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Job Listings</h1>

    <form method="GET" action="{{ route('public.jobs.index') }}">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Search by title" value="{{ request('title') }}">

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" placeholder="Search by location" value="{{ request('location') }}">

        <button type="submit">Search</button>
        <a href="{{ route('public.jobs.index') }}">Clear</a>
    </form>

    @if($jobs->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Salary</th>
                    <th>Deadline</th>
                    <th>Description</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->location }}</td>
                        <td>{{ $job->salary }}</td>
                        <td>{{ \Carbon\Carbon::parse($job->deadline)->format('Y-m-d') }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($job->description, 50) }}</td>
                        <td><a href="{{ route('public.jobs.show', $job) }}">View Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $jobs->withQueryString()->links() }}
    @else
        <p>No jobs found.</p>
    @endif
<div class="profile-info">
        <p><strong>Job Portal Developed By:</strong></p>
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
</body>
</html>
