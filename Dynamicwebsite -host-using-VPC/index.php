<?php require_once 'config.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dynamic Website</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Dynamic Website ✅</h1>
  <p>Public EC2 (web) → Private EC2 (DB)</p>

  <h2>Add a message</h2>
  <form method="post" action="submit.php">
    <input type="text" name="txt" placeholder="Type something..." required>
    <button type="submit">Save</button>
  </form>

  <h2>Latest messages</h2>
  <ul>
  <?php
    $conn->query("CREATE TABLE IF NOT EXISTS messages (id INT AUTO_INCREMENT PRIMARY KEY, txt VARCHAR(255) NOT NULL)");
    if ($res = $conn->query("SELECT id, txt FROM messages ORDER BY id DESC LIMIT 100")) {
        while ($row = $res->fetch_assoc()) {
            $id = (int)$row['id'];
            $txt = htmlspecialchars($row['txt']);
            echo "<li>#{$id} — {$txt}</li>";
        }
        $res->free();
    } else {
        echo "<li>No messages yet.</li>";
    }
  ?>
  </ul>
</body>
</html>
