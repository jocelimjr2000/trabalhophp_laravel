<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>{{ $title }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('schedule.list') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('schedule.save') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" class="form-control" value="{{ $data->id ?? null }}">

        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $data->name ?? null }}">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telefone:</strong>
                    <input type="text" name="cellphone" class="form-control" placeholder="Telefone" value="{{ $data->cellphone ?? null }}">
                    @error('cellphone')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Ok</button>
        </div>
    </form>
</div>
</body>

</html>
