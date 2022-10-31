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
            <div class="pull-left">
                <h2>{{ $title }}</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('schedule.create') }}"> Cadastrar contato</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th width="280px">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->cellphone }}</td>
                <td>
                    <form action="{{ route('schedule.delete', $contact->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('schedule.edit',$contact->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
