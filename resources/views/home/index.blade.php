<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Ronaldo Nascimento">
            <meta name="generator" content="Ronaldo Nascimento">

        <title>Crud Laravel</title>

        <!-- Fonts -->
    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    </head>

    <body>
        <div class="container">
            <br>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <br>
                <div class="col-lg-12" style="text-align: right;">
                    <a href="{{ route('create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar</a>
                </div>
            <br>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Cidade / Estado</th>
                <th scope="col">Hobbies</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pessoas as $pessoa)
              <tr>
                <th scope="row">{{$pessoa->id}}</th>
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->email}}</td>
                <td>{{$pessoa->cidade}}-
                    @if($pessoa->estado == '1')
                           BA
                    @elseif($pessoa->estado == '2')
                           PB
                    @elseif($pessoa->estado == '3')
                           PE
                    @endif

                </td>
                <td>{{$pessoa->hobbie}}</td>
                <td>
                    <a href="{{ route('edit', $pessoa->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="{{ route('destroy',$pessoa->id) }}"><i class="fa-regular fa-trash-can" style="color: red"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
              </table>

            </div>
        </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{!! url('assets/js/jquery.min.js') !!}"></script>
    <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></!script-->
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    </body>
</html>
