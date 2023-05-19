<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda de Reverse IP</title>
</head>
<body>
    <h1>Búsqueda de Reverse IP</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="ip">Dirección IP:</label>
        <input type="text" id="ip" name="ip" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ip = $_POST['ip'];
        $domain = gethostbyaddr($ip);

        if ($domain !== $ip) {
            echo "El nombre de dominio inverso para la dirección IP $ip es: $domain";
        } else {
            echo "No se encontró un nombre de dominio inverso para la dirección IP $ip.";
        }
    }
    ?>
</body>
</html>
