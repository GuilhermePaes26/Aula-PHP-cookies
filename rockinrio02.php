<?php
if (isset($_POST['font_size'])) {
    setcookie('font_size', $_POST['font_size'], time() + 120, "/");  
    $font_size = $_POST['font_size'];
} elseif (isset($_COOKIE['font_size'])) {
    $font_size = $_COOKIE['font_size'];
} else {
    $font_size = '16px';  
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock In Rio - Escolha o Tamanho da Fonte</title>
</head>
<body style="font-size: <?php echo htmlspecialchars($font_size); ?>;">

    <h1>Bem-vindo ao Rock In Rio!</h1>
    <p>Escolha o tamanho da fonte para melhorar sua experiência de leitura.</p>

    <form method="POST" action="">
        <label for="font_size">Escolha o tamanho da fonte:</label>
        <select name="font_size" id="font_size">
            <option value="14px" <?php if ($font_size == '14px') echo 'selected'; ?>>Pequeno (14px)</option>
            <option value="16px" <?php if ($font_size == '16px') echo 'selected'; ?>>Padrão (16px)</option>
            <option value="18px" <?php if ($font_size == '18px') echo 'selected'; ?>>Grande (18px)</option>
            <option value="20px" <?php if ($font_size == '20px') echo 'selected'; ?>>Muito Grande (20px)</option>
        </select>
        <button type="submit">Salvar Tamanho</button>
    </form>

    <footer>
        <p>&copy; 2024 Rock In Rio. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
