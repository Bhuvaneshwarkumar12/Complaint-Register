<?php
include 'config.php';
$id = $_GET['id'];
$errors = [];

$result = $conn->query("SELECT * FROM complaints WHERE id=$id");
if ($result->num_rows == 0) die("Complaint not found.");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $dept = trim($_POST["department"]);
    $email = trim($_POST["email"]);
    $complaint = trim($_POST["complaint"]);

    if (!$name || !$dept || !$email || !$complaint) {
        $errors[] = "All fields are required.";
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("UPDATE complaints SET name=?, department=?, email=?, complaint=? WHERE id=?");
        $stmt->bind_param("ssssi", $name, $dept, $email, $complaint, $id);
        $stmt->execute();
        $stmt->close();
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Complaint</title></head>
<body>
<h2>Edit Complaint</h2>
<?php if (!empty($errors)) echo "<p style='color:red'>" . implode("<br>", $errors) . "</p>"; ?>
<form method="post">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br><br>
    Department: <input type="text" name="department" value="<?= $row['department'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br><br>
    Complaint:<br>
    <textarea name="complaint" rows="5" cols="40"><?= $row['complaint'] ?></textarea><br><br>
    <button type="submit">Update Complaint</button>
</form>
</body>
</html>