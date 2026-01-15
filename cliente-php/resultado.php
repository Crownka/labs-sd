<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; text-align: center; }
        .container { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        a { color: #4CAF50; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultado da Operação</h2>
        <p><?php echo htmlspecialchars($_GET['resposta'] ?? 'Nenhum resultado encontrado.'); ?></p>
        <br>
        <a href="index.php">< Voltar</a>
    </div>
</body>
</html>