<?php
$conn = new mysqli('localhost', 'root', '', 'logindb');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert post into database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $department = $conn->real_escape_string($_POST['department']);
    $content = $conn->real_escape_string($_POST['content']);

    $sql = "INSERT INTO posts (name, department, content) VALUES ('$name', '$department', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo "Post added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
