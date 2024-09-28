<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $stmt = $pdo->prepare("INSERT INTO contacts (name, email, phone) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $phone]);

    header("Location: index1.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Contact</title>
    <link rel="stylesheet" type="" href="/pico.min.css">
</head>

<body>
    <header class="container">

        <h1>Add Contact</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <button type="submit">Add Contact</button>
        </form>
        <a href="index1.php">View Contacts</a>
    </header>
</body>

</html>