<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        h2 {
            color: #1464af;
        }
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Relatório de Dados Recebidos</h2>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
            $datanascimento = filter_input(INPUT_POST, 'datanascimento', FILTER_SANITIZE_SPECIAL_CHARS);
            $estadocivil = filter_input(INPUT_POST, 'estadocivil', FILTER_SANITIZE_SPECIAL_CHARS);
            $genero = ucfirst(strtolower(filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS)));
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $website = filter_input(INPUT_POST, 'website', FILTER_SANITIZE_URL);
            $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
            $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
            $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS);
            $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
            $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
            $uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
            $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
            $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS);
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
            $interesses = isset($_POST['interesse']) ? $_POST['interesse'] : [];
            $sugestoes = filter_input(INPUT_POST, 'sugestoes', FILTER_SANITIZE_SPECIAL_CHARS);
            $confirmacaotermos = isset($_POST['confirmacaotermos']) ? "Sim" : "Não";

            // Verificação de campos obrigatórios
            if (empty($nome) || empty($cpf) || empty($datanascimento) || empty($estadocivil) || empty($email) || empty($endereco) || empty($bairro) || empty($cep) || empty($cidade) || empty($uf) || empty($login) || empty($senha) || empty($confirmacaotermos)) {
                echo "<div class='alert alert-warning'>Por favor, preencha todos os campos obrigatórios.</div>";
                exit;
            }

            // Validação do e-mail
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='alert alert-danger'>E-mail inválido.</div>";
                exit;
            }
        ?>
        
        <div class="table-container">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr><th>Nome:</th><td><?php echo htmlspecialchars($nome); ?></td></tr>
                    <tr><th>CPF:</th><td><?php echo htmlspecialchars($cpf); ?></td></tr>
                    <tr><th>Data de Nascimento:</th><td><?php echo htmlspecialchars($datanascimento); ?></td></tr>
                    <tr><th>Estado Civil:</th><td><?php echo htmlspecialchars($estadocivil); ?></td></tr>
                    <tr><th>Gênero:</th><td><?php echo htmlspecialchars($genero); ?></td></tr>
                    <tr><th>E-mail:</th><td><?php echo htmlspecialchars($email); ?></td></tr>
                    <tr><th>Website:</th><td><?php echo htmlspecialchars($website); ?></td></tr>
                    <tr><th>Endereço:</th><td><?php echo htmlspecialchars($endereco); ?></td></tr>
                    <tr><th>Bairro:</th><td><?php echo htmlspecialchars($bairro); ?></td></tr>
                    <tr><th>Complemento:</th><td><?php echo htmlspecialchars($complemento); ?></td></tr>
                    <tr><th>CEP:</th><td><?php echo htmlspecialchars($cep); ?></td></tr>
                    <tr><th>Cidade:</th><td><?php echo htmlspecialchars($cidade); ?></td></tr>
                    <tr><th>UF:</th><td><?php echo htmlspecialchars($uf); ?></td></tr>
                    <tr><th>Telefone:</th><td><?php echo htmlspecialchars($telefone); ?></td></tr>
                    <tr><th>Celular:</th><td><?php echo htmlspecialchars($celular); ?></td></tr>
                    <tr><th>Login:</th><td><?php echo htmlspecialchars($login); ?></td></tr>
                    <tr><th>Senha:</th><td>Oculta por segurança</td></tr>
                    <tr><th>Interesses:</th><td><?php echo !empty($interesses) ? htmlspecialchars(implode(", ", $interesses)) : "Nenhum interesse selecionado"; ?></td></tr>
                    <tr><th>Sugestões:</th><td><?php echo htmlspecialchars($sugestoes); ?></td></tr>
                    <tr><th>Concordou com os termos:</th><td><?php echo htmlspecialchars($confirmacaotermos); ?></td></tr>
                </tbody>
            </table>
        </div>

        <?php
        } else {
            echo "<div class='alert alert-info'>Nenhum dado recebido.</div>";
        }
        ?>
    </div>
</body>
</html>
