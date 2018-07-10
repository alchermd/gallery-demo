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
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/upload">Upload</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 30px;">
        <h1 class="text-center">Upload an Image</h1>


        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="/images" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="created_by">Your Name</label>

                        @if ($error = $errors->first('created_by'))
                            <span class="text-danger float-right">
                                <small>{{ $error }}</small>
                            </span>
                        @endif

                        <input type="text" class="form-control" name="created_by" id="created_by" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>

                        @if ($error = $errors->first('description'))
                            <span class="text-danger float-right">
                                <small>{{ $error }}</small>
                            </span>
                        @endif

                        <textarea class="form-control" name="description" id="description" cols="5" rows="7"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file" id="file" required>
                            
                            @if ($error = $errors->first('file'))
                            <span class="text-danger float-right">
                                <small>{{ $error }}</small>
                            </span>

                            @endif
                            <label class="custom-file-label" for="file">Choose image file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>