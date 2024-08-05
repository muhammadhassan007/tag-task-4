<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
        <p>Uploaded File: <a href="{{ asset('uploads/' . session('file')) }}" target="_blank">{{ session('file') }}</a></p>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" />
        <button type="submit">Upload</button>
    </form>
</body>
</html>
