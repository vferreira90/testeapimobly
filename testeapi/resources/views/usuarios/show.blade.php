l
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalhes usuarios</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios.create') }}">Criar Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Listar Posts</a>
                </li>
            </ul>
        </div>
    </nav>


    <form>

        <div class="container">

        <h3>Detalhes do Usuario</h3>  

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['id'])}}" name="id" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['name'])}}" name="name" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['username'])}}" name="username" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['email'])}}" name="email" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Street</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['street'])}}" name="street" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Suite</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['suite'])}}" name="suite" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['city'])}}" name="city" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Zipcode</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['zipcode'])}}" name="zipcode" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Longitude</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['geolng'])}}" name="geolng" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">Latitude</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['geolat'])}}" name="geolat" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">phone</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['phone'])}}" name="phone" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">website</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['website'])}}" name="website" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">compname</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['compname'])}}" name="compname" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">catchphrase</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['catchphrase'])}}" name="catchphrase" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="input" class="col-sm-2 col-form-label">bs</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{old('usuario', $usuarios['bs'])}}" name="bs" readonly>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
