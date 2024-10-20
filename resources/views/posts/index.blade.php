<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ZTC NEWS | List Berita</title>
</head>
<body>
    <div class="container mt-4">
        <h1 style="text-align:center" class="mb-4">ZEROTHREAT COMMUNITY NEWS</h1>
        @foreach($posts as $post)
        @php($post = explode(",", $post))
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post[1] }}</h5>
                <p class="card-text">{{ $post[2] }}.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated {{ date('d M Y H:i:s', strtotime($post[4]))}}</small></p>
                <a href="posts/{{$post[0]}}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>