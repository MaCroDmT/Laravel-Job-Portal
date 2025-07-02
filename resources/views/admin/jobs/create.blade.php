<!DOCTYPE html>
<html>
<head>
    <title>Create New Job</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Add New Job Post</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description') }}</textarea><br><br>

        <label>Location:</label><br>
        <input type="text" name="location" value="{{ old('location') }}"><br><br>

        <label>Salary:</label><br>
        <input type="number" name="salary" value="{{ old('salary') }}"><br><br>

        <label>Deadline:</label><br>
        <input type="date" name="deadline" value="{{ old('deadline') }}"><br><br>

        <button type="submit">Create Job</button>
    </form>

    <p><a href="{{ route('jobs.index') }}">Back to List</a></p>
</body>
</html>
