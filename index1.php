<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM contacts");
$contacts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact List</title>
    <link rel="stylesheet" type="" href="/pico.min.css">
</head>

<body>
    <header class="container">
        <h1>Contact List</h1>
        <a href="add_contact.php">Add New Contact</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?php echo $contact['id']; ?></td>
                <td><?php echo $contact['name']; ?></td>
                <td><?php echo $contact['email']; ?></td>
                <td><?php echo $contact['phone']; ?></td>
                <td>
                    <a href="delete_contact.php?id=<?php echo $contact['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </header>
</body>

</html>