<head>
    <title>Edit Job</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Job</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Job Post</h1>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jobs.update', $job) }}" method="POST" class="job-form">
        @csrf
        @method('PUT')

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title', $job->title) }}"><br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description', $job->description) }}</textarea><br><br>

        <label>Location:</label><br>
        <input type="text" name="location" value="{{ old('location', $job->location) }}"><br><br>

        <label>Salary:</label><br>
        <input type="number" name="salary" value="{{ old('salary', $job->salary) }}"><br><br>

        <label>Deadline:</label><br>
        <input type="date" name="deadline" value="{{ old('deadline', $job->deadline) }}"><br><br>

        <button type="submit">Update Job</button>
    </form>

    <p><a href="{{ route('jobs.index') }}">Back to List</a></p>
</body>
</html>
