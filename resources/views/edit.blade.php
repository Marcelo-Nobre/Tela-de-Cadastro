<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <title>Cadastro</title>
</head>

<body>
    <h2>Edit</h2>
    <div class="form">
        <form class="container" method="POST" action="{{ route('dashboard.edit', $cadastro->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="{{ $cadastro->name }}" pattern="^(?!\s*$).+"
                    required autofocus>
            </div>

            <div>
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" name="phone" class="phone_with_ddd"
                    value="{{ $cadastro->phone }}" pattern="^(?!\s*$).+" required>

            </div>
            <div>
                <label for="address">Endereço:</label>
                <input type="text" id="address" name="address" value="{{ $cadastro->address }}"
                    pattern="^(?!\s*$).+" required>
            </div>
            <div>
                <label for="date">Data de Nascimento:</label>
                <input type="date" id="date" name="date" value="{{ $cadastro->date }}" pattern="^(?!\s*$).+"
                    format="Y-m-d" max="{{ date('Y-m-d') }}" required>
            </div>
            <div>
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" value="{{ $cadastro->cpf }}"
                    pattern="^(?!\s*$).+"required>

            </div>

            <div>
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $('.phone_with_ddd').mask('(00) 00000-0000');

        $('#cpf').mask('000.000.000-00', {
            reverse: true
        });
    </script>
</body>

</html>
