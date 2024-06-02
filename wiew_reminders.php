<!DOCTYPE html>
<html>
<head>
    <title>Hatırlatmalar</title>
</head>
<body>
    <h1>Hatırlatmalar</h1>
    <?php
    $file = "reminders.txt";
    if (file_exists($file)) {
        $reminders = file($file);
        if (count($reminders) > 0) {
            echo "<ul>";
            foreach ($reminders as $reminder) {
                echo "<li>" . htmlspecialchars($reminder) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Henüz kaydedilmiş hatırlatma yok.";
        }
    } else {
        echo "Henüz kaydedilmiş hatırlatma yok.";
    }
    ?>
    <br>
    <a href="index.php">Yeni Hatırlatma Ekle</a>
</body>
</html>
