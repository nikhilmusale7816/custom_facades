<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional: Bootstrap or custom CSS -->
</head>
<body>

<div class="container">
    <h1>User Details</h1>

    @if ($user)
        <div class="card">
            <div class="card-header">
                User ID: {{ $user->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">
                    <strong>Email:</strong> {{ $user->email }}<br>
                    <strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}<br>
                    <strong>Updated At:</strong> {{ $user->updated_at->format('Y-m-d H:i:s') }}
                </p>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    @else
        <p>User not found.</p>
    @endif
</div>

</body>
</html>
