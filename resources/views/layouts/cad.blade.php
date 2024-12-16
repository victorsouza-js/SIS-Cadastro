<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    

<main>
    @yield('content')
</main>


<script>
    
    document.getElementById('registerForm').addEventListener('submit', function (e) {
        e.preventDefault(); 

       
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const passwordConfirmation = document.getElementById('password_confirmation').value;
        const errorMessages = document.getElementById('errorMessages');
     

        
        errorMessages.innerHTML = '';

       
        if (!validateEmail(email)) {
            errorMessages.innerHTML += '<p>Por favor, insira um e-mail válido.</p>';
            return;
        }

      
        if (password.length < 8) {
            errorMessages.innerHTML += '<p>A senha deve ter pelo menos 8 caracteres.</p>';
            return;
        }

        
        if (password !== passwordConfirmation) {
            errorMessages.innerHTML += '<p>As senhas não coincidem.</p>';
            return;
        }

     
        localStorage.setItem('name', name);
        localStorage.setItem('email', email);
        localStorage.setItem('password', password);
        localStorage.setItem('password_confirmation', passwordConfirmation);

        alert('Cadastro realizado com sucesso!');
        
        window.location.href = '/login';
    });

  
    function validateEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

</script>

</body>
</html>