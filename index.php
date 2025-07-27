<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>All Complaints</title></head>
<body>
<h2>Complaint Register</h2>
<a href="create.php">➕ Register New Complaint</a><br><br>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Dept</th>
        <th>Email</th>
        <th>Complaint</th>
        <th>Time</th>
        <th>Actions</th>
    </tr>
<?php
$result = $conn->query("SELECT * FROM complaints ORDER BY created_at DESC");
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['department']}</td>
        <td>{$row['email']}</td>
        <td>{$row['complaint']}</td>
        <td>{$row['created_at']}</td>
        <td>
            <a href='edit.php?id={$row['id']}'>Edit</a> |
            <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\");'>Delete</a>
        </td>
    </tr>";
}
?>
</table>
</body>
</html>
