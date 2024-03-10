<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>
        <form id="cadastroForm" action="processa_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <script>
        // Função de validação do formulário
        document.getElementById("cadastroForm").addEventListener("submit", function(event) {
            var nome = document.getElementById("nome").value.trim();
            var email = document.getElementById("email").value.trim();
            var senha = document.getElementById("senha").value.trim();
            var error = "";

            // Validação do campo nome
            if (nome === "") {
                error += "Por favor, digite seu nome.\n";
            }

            // Validação do campo email
            if (email === "") {
                error += "Por favor, digite seu email.\n";
            } else if (!isValidEmail(email)) {
                error += "Por favor, digite um email válido.\n";
            }

            // Validação do campo senha
            if (senha === "") {
                error += "Por favor, digite sua senha.\n";
            }

            // Exibir mensagens de erro ou enviar formulário
            if (error !== "") {
                alert(error);
                event.preventDefault();
            }
        });

        // Função para validar formato de email
        function isValidEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>
</body>
</html>
