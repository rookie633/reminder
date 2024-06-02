<!DOCTYPE html>
<html>
<head>
    <title>Hatırlatıcı Programı</title>
</head>
<body>
    <h1>Hatırlatıcı Programı</h1>
    <form action="save_reminder.php" method="post">
        <label for="reminder">Hatırlatma:</label>
        <input type="text" id="reminder" name="reminder" required><br><br>
        <label for="date">Tarih:</label>
        <input type="date" id="date" name="date" required><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <br>
    <a href="wiew_reminders.php">Hatırlatmaları Görüntüle</a>
</body>
</html>
