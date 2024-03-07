<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</h2>
            <p>Esta é a sua página do dashboard.</p>
            <a href="logout.php">Sair</a>
        </div>
    </div>
</body>
</html>
