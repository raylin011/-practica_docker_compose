<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo</title>
</head>
<body>
    <h1>Raylin enmanuel mena garcia matricula: 2021-0201</h1>
    <?php
        $servername = getenv("MYSQL_HOST");
        $username = getenv("MYSQL_USER");
        $password = getenv("MYSQL_PASSWORD");
        $database = getenv("MYSQL_DATABASE");

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión a MySQL fallida: " . $conn->connect_error);
        } else {
            echo "Conexión a MySQL exitosa!";
        }
    ?>
</body>
</html>
