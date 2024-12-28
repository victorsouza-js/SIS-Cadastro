<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre em contato com a gente</title>
    <link rel="stylesheet" href="{{asset('css/contato.css')}}">
</head>
<body>


    <main>
        @yield('content')
    </main>


    <script>
        function sendMessage() {
            const userInput = document.getElementById('userInput');
            const userEmail = document.getElementById('userEmail');
            const userName = document.getElementById('userName');
            const chatBox = document.getElementById('chatBox');
            const message = userInput.value.trim();

            if (message) {
                // Adiciona mensagem do usuário
                chatBox.innerHTML += `<div class="message user-message">${message}</div>`;
                chatBox.innerHTML += `<div class="message user-message">E-mail: ${userEmail.value}</div>`;
                chatBox.innerHTML += `<div class="message user-message">Nome: ${userName.value}</div>`;

                // Resposta automática do "bot"
                chatBox.innerHTML += `<div class="message bot-message">Obrigado pela sua mensagem! Entraremos em contato em breve.</div>`;
                chatBox.innerHTML += `<div class="message bot-message">Iremos analisar seus dados!</div>`;
               

                

                // Limpa o input
                userInput.value = '';
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        }
    </script>

    
    
</body>
</html>