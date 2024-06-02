<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reminder = $_POST['reminder'];
    $date = $_POST['date'];

    $data = $date . " - " . $reminder . "\n";
    file_put_contents("reminders.txt", $data, FILE_APPEND);

    echo "Hatırlatma kaydedildi! <a href='index.php'>Geri dön</a>";
}
?>
