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
                <input type="text" id="name" name="name" value="{{ $cadastro->name }}" required autofocus>
            </div>

            <div>
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" name="phone" value="{{ $cadastro->phone }}"
                    oninput="formatPhoneNumber(this)" onblur="this.value = unformatPhoneNumber(this.value)" required>
                <script src="{{ asset('js/phone.js') }}"></script>
            </div>
            <div>
                <label for="address">Endereço:</label>
                <input type="text" id="address" name="address" value="{{ $cadastro->address }}" required>
            </div>
            <div>
                <label for="date">Data de Nascimento:</label>
                <input type="date" id="date" name="date" value="{{ $cadastro->date }}" required>
            </div>
            <div>
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" value="{{ $cadastro->cpf }}"
                    oninput="formatCPF(this)" onblur="this.value = unformatCPF(this.value)" required>
                <script src="{{ asset('js/cpf.js') }}"></script>
            </div>

            <div>
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>
