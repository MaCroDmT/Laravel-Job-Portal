<!DOCTYPE html>
<html>
<head>
    <title>Job List</title>
    <link rel="stylesheet" href="{{ asset('css/admin-jobs.css') }}">
</head>
<body>
    <h1>All Job Posts</h1>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <a href="{{ route('jobs.create') }}">Add New Job</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Salary</th>
                <th>Deadline</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->location }}</td>
                    <td>{{ $job->salary }}</td>
                    <td>{{ $job->deadline }}</td>
                    <td>
                        <a href="{{ route('jobs.edit', $job) }}">Edit</a> |
                        <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this job?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No jobs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
