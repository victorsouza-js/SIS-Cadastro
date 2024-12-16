<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <main>
        @yield('content')
    </main>


    <script>
        document.getElementById('name').value = localStorage.getItem('name') || '';
        document.getElementById('email').value = localStorage.getItem('email') || '';
        document.getElementById('password').value = localStorage.getItem('password') || '';


        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Evita o envio padrão do formulário

            // Recupera os valores inseridos no formulário
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Recupera os dados armazenados no localStorage durante o cadastro
            const storedName = localStorage.getItem('name');
            const storedEmail = localStorage.getItem('email');
            const storedPassword = localStorage.getItem('password');

            // Verifica se os dados inseridos coincidem com os dados armazenados
            if (name === storedName && email === storedEmail && password === storedPassword) {
                alert('Login realizado com sucesso!');
                window.location.href = '/sucesso'; // Redireciona para a página de sucesso
            } else {
                alert('Dados incorretos. Por favor, verifique e tente novamente.');
            }
        });
    </script>
</body>

</html>