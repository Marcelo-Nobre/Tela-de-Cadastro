<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <title>Cadastro</title>
</head>

<body>
    <h2>Cadastro</h2>
    <div class="form">
        <form class="container" method="POST" action="{{ route('cadastro') }}">
            @csrf

            <div>
                <label for="name">Nome:</label>
                <input type="name" id="name" name="name" required autofocus>
            </div>

            <div>
                <label for="phone">Telefone:</label>
                <input type="text" id="phone" name="phone" oninput="formatPhoneNumber(this)"
                    onblur="this.value = unformatPhoneNumber(this.value)" required autofocus>
                <script src="{{ asset('js/phone.js') }}"></script>

            </div>
            <div>
                <label for="address">Endereço:</label>
                <input type="text" id="address" name="address" required autofocus>
            </div>
            <div>
                <label for="date">Data de Nascimento:</label>
                <input type="date" id="date" name="date" format="Y-m-d" required autofocus>
            </div>
            <div>
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf"oninput="formatCPF(this)"
                    onblur="this.value = unformatCPF(this.value)" required autofocus>
                <script src="{{ asset('js/cpf.js') }}"></script>

            </div>



            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>
