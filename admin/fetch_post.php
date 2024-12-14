<?php
$conn = new mysqli('localhost', 'root', '', 'logindb');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, department, content, created_at FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="post">
            <div class="post-header">
                <img src="https://placehold.co/40x40" alt="Profile picture">
                <div>
                    <strong>' . htmlspecialchars($row['name']) . '</strong>
                    <br>
                    <small>' . htmlspecialchars($row['department']) . '</small>
                </div>
            </div>
            <div class="post-content">
                ' . nl2br(htmlspecialchars($row['content'])) . '
            </div>
            <div class="post-actions">
                <button>Like</button>
                <button>Comment</button>
                <button>Share</button>
            </div>
        </div>';
    }
} else {
    echo '<p>No posts available.</p>';
}

$conn->close();
?>