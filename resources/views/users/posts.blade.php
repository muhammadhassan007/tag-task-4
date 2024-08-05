<!DOCTYPE html>
<html>
<head>
    <title>{{ $user->name }}'s Posts</title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $user->name }}'s Posts</h1>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ $post->body }}</p>
                    <h3 class="mt-4">Comments</h3>
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

    <!-- Add Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
