<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index programas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">

        <a href="{{ route('programas.create') }}" class="btn btn-primary" >Crear nuevo producto</a>
        @if(Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <table class="table table-responsive table-striped mt-5">
            <thead>
                <tr>
                    <th>id</th>
                    <th>codigo</th>
                    <th>programa</th>
                    <th>sigla</th>
                    <th>operaciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($programas as $programa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $programa->codigo }}</td>
                    <td>{{ $programa->programa }}</td>
                    <td>{{ $programa->sigla }}</td>
                    <td>

                        <form action="{{ route('programas.edit', $programa->id)}}" method="GET">
                            @method("GET")
                            @csrf
                            <button type="submit"  class="btn btn-sn btn-primary" >Modificar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
