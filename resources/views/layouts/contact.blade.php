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

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script>
        function sendMessage() {
            const userInput = document.getElementById('userInput');
            const chatBox = document.getElementById('chatBox');
            const message = userInput.value.trim();

            if (message) {
                // Adiciona mensagem do usuário
                chatBox.innerHTML += `<div class="message user-message">${message}</div>`;

                // Resposta automática do "bot"
                chatBox.innerHTML += `<div class="message bot-message">Obrigado pela sua mensagem! Entraremos em contato em breve.</div>`;

                // Limpa o input
                userInput.value = '';
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        }
    </script>
    
</body>
</html>