<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cliente PHP - Calculadora</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; text-align: center; background-color: #f4f7f6; }
        .container { max-width: 400px; margin: auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, select, button { margin: 10px 0; padding: 10px; width: 100%; box-sizing: border-box; }
        button { background-color: #4CAF50; color: white; border: none; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora via API Spring Boot</h2>
        <form action="calcular.php" method="GET">
            <input type="number" name="num1" placeholder="Número 1" required step="any">
            <input type="number" name="num2" placeholder="Número 2" required step="any">
            <select name="operacao">
                <option value="somar">Somar</option>
                <option value="subtrair">Subtrair</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>