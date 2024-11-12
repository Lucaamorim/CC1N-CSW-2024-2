<!-- pagina_inicial.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    
    <!-- Incluindo o CSS do Bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Inclui o conteúdo do navbar -->
    <?php include('navbar.html'); ?>

    <div class="container mt-5">
        <h1>Bem-vindo à Página Inicial</h1>
        <p>Esta é a página inicial do meu site, utilizando o Bootstrap para estilização.</p>
        <button class="btn btn-primary">Botão de Exemplo</button>
    </div>

    <!-- Incluindo o JavaScript do Bootstrap via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
