<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Gallery</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/upload">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            @forelse ($images as $image)
                <div class="col-lg-6 offset-lg-3">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{{ Storage::url($image->url) }}">
                        <div class="card-body">
                            <h5 class="card-title">by {{ $image->created_by }}</h5>
                            <p class="card-text">
                                {{ $image->description ? $image->description : 'No description' }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-6 offset-lg-3">
                    <h1 class="text-center">No Images Yet...</h1>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>