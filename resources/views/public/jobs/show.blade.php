<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $job->title }} - Job Details</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="job-details">
        <h1>{{ $job->title }}</h1>

        <p><strong>Location:</strong> {{ $job->location }}</p>
        <p><strong>Salary:</strong> {{ $job->salary }}</p>
        <p><strong>Deadline:</strong> {{ \Carbon\Carbon::parse($job->deadline)->format('Y-m-d') }}</p>

        <h3>Description</h3>
        <p>{{ $job->description }}</p>

        <a class="button" href="{{ route('public.jobs.index') }}">← Back to Job Listings</a>
    </div>
</body>
</html>
