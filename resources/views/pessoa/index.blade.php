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
                <div class="col-lg-12" style="text-align: right;">
                    <a href="{{ route('index') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            <br>
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
            <form>
             <div class="col-12">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="nome" class="form-control" id="nome" placeholder="Nome" name="nome">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@email.com" name="email">
                </div>
                <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado">
                            <option value="">Selecione um estado</option>
                            @foreach ($estados as $estado)
                                <option value="{{$estado->id}}">{{$estado->nome}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade</label>
                        <select class="form-select" id="cidade" name="cidade">
                            <option value="">Selecione um estado primeiro</option>
                        </select>
                    </div>
                </div>
                </div>

                    <div class="mb-3">
                        <label for="cidade" class="form-label">Hobbie</label>
                        <select class="form-select" aria-label="Default select example" name="hobbie">
                            @foreach ($hobbies as $hobbie)
                            <option value="{{$hobbie}}">{{$hobbie}}</option>
                            @endforeach
                          </select>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
                </form>

             </div>
            </div>


     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="{!! url('assets/js/jquery.min.js') !!}"></script>
     <script src="{!! url('assets/js/cities.js') !!}"></script>
     <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
     </body>
 </html>
