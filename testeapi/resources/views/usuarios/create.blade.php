<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Teste Mobly API</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('usuarios.create') }}">Criar Usuarios</a>
                </li>
            </ul>
        </div>
    </nav>


    <form action="{{ route('usuarios.store')}}" class="form-horizontal" method="POST">
        @csrf
        <div class="container">

        <h3>Criar do Usuario</h3> 

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="id">
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="username">
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Street</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="street">
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Suite</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="suite">
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="city">
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Zipcode</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="zipcode">
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Longitude</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="geolng">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Latitude</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="geolat">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">phone</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">website</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="website">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">compname</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="compname">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">catchphrase</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="catchphrase">
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">bs</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="digite" name="bs">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>