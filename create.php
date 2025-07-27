<?php include 'config.php';

$name = $dept = $email = $complaint = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $dept = trim($_POST["department"]);
    $email = trim($_POST["email"]);
    $complaint = trim($_POST["complaint"]);

    if (!$name || !$dept || !$email || !$complaint) {
        $errors[] = "All fields are required.";
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO complaints (name, department, email, complaint) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $dept, $email, $complaint);
        $stmt->execute();
        $stmt->close();
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Register Complaint</title></head>
<body>
<h2>Register a Complaint</h2>
<?php if (!empty($errors)) echo "<p style='color:red'>" . implode("<br>", $errors) . "</p>"; ?>
<form method="post">
    Name: <input type="text" name="name"><br><br>
    Department: <input type="text" name="department"><br><br>
    Email: <input type="email" name="email"><br><br>
    Complaint:<br>
    <textarea name="complaint" rows="5" cols="40"></textarea><br><br>
    <button type="submit">Submit Complaint</button>
</form>
</body>
</html>
