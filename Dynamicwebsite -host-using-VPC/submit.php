<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['txt'])) {
    $txt = trim($_POST['txt']);
    if ($txt !== '') {
        $stmt = $conn->prepare("INSERT INTO messages (txt) VALUES (?)");
        if ($stmt) {
            $stmt->bind_param("s", $txt);
            $stmt->execute();
            $stmt->close();
        }
    }
}
// Redirect back to home
header("Location: /");
exit;
