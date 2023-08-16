<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">

    <!-- app css -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Gerenciar Cadastros:</h2>
                </div>
                <div class="col-md-12 table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><span>Nome</span> </th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cadastros as $cadastro)
                                <tr>
                                    <td>{{ $cadastro->name }}</td>
                                    <td>{{ $cadastro->phone }}</td>
                                    <td>{{ $cadastro->address }}</td>
                                    <td>{{ $cadastro->date }}</td>
                                    <td>{{ $cadastro->cpf }}</td>

                                    <td>
                                        <form action="{{ route('dashboard') }}" method="POST"
                                            class="form-group update-form">
                                            <input type="hidden" name="type" value="update">
                                            <input type="hidden" name="id" value="">



                                            <a href="{{ route('dashboard.edit', $cadastro->id) }}" class="update-btn">
                                                {{-- class="update-btn" --}}
                                                <i class="fas fa-sync-alt"></i>
                                            </a>



                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('dashboard.destroy', $cadastro->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="type" value="delete">
                                            <input type="hidden" name="id" value="">
                                            <button type="submit" class="delete-btn">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
