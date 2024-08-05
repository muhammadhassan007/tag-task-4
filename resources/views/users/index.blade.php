<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Users</h1>
        @foreach ($users as $user)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="card-title">{{ $user->name }}</h2>
                        <a href="{{ route('user.posts', $user->id) }}" class="btn btn-primary ml-3">View Posts</a>
                    </div>
                    <p class="card-text">{{ $user->email }}</p>
                    <h3 class="mt-4">Posts</h3>
                    @foreach ($user->posts as $post)
                        <div class="card mt-3">
                            <div class="card-body">
                                <h4 class="card-title">{{ $post->title }}</h4>
                                <p class="card-text">{{ $post->body }}</p>
                                <h5 class="mt-4">Comments</h5>
                                @foreach ($post->comments as $comment)
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <p class="card-text">{{ $comment->body }}</p>
                                            <p class="card-text">
                                                <small class="text-muted">Commented by: {{ $comment->user->name }}</small>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- Add Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
