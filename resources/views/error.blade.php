<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <title>Error</title>
</head>

<body>

    <div class="form">
        <form class="containererror" method="POST" action="{{ route('cadastro') }}">
            @csrf

            USUÁRIO JÁ CADASTRADO
            <div>
                {{-- olhar aqui depois --}}
                <button class="error" type="text"><a href="{{ url('/') }}">VOLTAR</a></button>
            </div>
        </form>

    </div>
</body>

</html>
