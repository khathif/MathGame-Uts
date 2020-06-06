<?php    
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawaban Benar</title>
</head>
<body>

    Hello <?php echo $_SESSION["nama"]; ?>, Selamat jawaban Anda benar. <br>
    Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?> <br><br>
    
    <a href="game.php">[Soal selanjutnya]</a>

</body>
</html>