<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">

        <div class="row">
            <col-md-4 class="offset-md-4">
                <a href="/programas" class="btn btn-primary" >Atras</a>
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{ route('programas.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Codigo</label>
                                <input type="text" name="codigo" class="form-control" required pattern="[0-9]*" title="El valor debe ser numerico">

                                <label>Nombre programa</label>
                                <input type="text" name="programa" class="form-control" required>

                                <label>Sigla</label>
                                <input type="text" name="sigla" class="form-control" required pattern="[A-Z]*" title="las siglas deben de estar en Mayuscula">

                                <button class="btn btn-primary mt-5" >Crear nuevo programa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </col-md-4>
        </div>

    </div>
</body>
</html>
