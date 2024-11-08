<?php
if (isset($_POST['background_color'])) {
    setcookie('background_color', $_POST['background_color'], time() + 120, "/");  
    $background_color = $_POST['background_color'];
} elseif (isset($_COOKIE['background_color'])) {
    $background_color = $_COOKIE['background_color'];
} else {
    $background_color = 'white';  
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock In Rio - Escolha sua Cor de Fundo</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($background_color); ?>;">

    <h1>Bem-vindo ao Rock In Rio!</h1>
    <p>Escolha sua cor de fundo preferida e aproveite sua experiência.</p>

    <form method="POST" action="">
        <label for="background_color">Escolha a cor de fundo:</label>
        <select name="background_color" id="background_color">
            <option value="white" <?php if ($background_color == 'white') echo 'selected'; ?>>Branco</option>
            <option value="blue" <?php if ($background_color == 'blue') echo 'selected'; ?>>Azul</option>
            <option value="green" <?php if ($background_color == 'green') echo 'selected'; ?>>Verde</option>
            <option value="yellow" <?php if ($background_color == 'yellow') echo 'selected'; ?>>Amarelo</option>
            <option value="red" <?php if ($background_color == 'red') echo 'selected'; ?>>Vermelho</option>
        </select>
        <button type="submit">Salvar cor</button>
    </form>

    <footer>
        <p>&copy; 2024 Rock In Rio. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
