<?php require_once 'config.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>All Messages</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>All Messages</h1>
  <p><a href="/">← Back</a></p>
  <table>
    <thead><tr><th>ID</th><th>Text</th></tr></thead>
    <tbody>
    <?php
      if ($res = $conn->query("SELECT id, txt FROM messages ORDER BY id DESC")) {
        while ($row = $res->fetch_assoc()) {
            $id = (int)$row['id'];
            $txt = htmlspecialchars($row['txt']);
            echo "<tr><td>{$id}</td><td>{$txt}</td></tr>";
        }
        $res->free();
      }
    ?>
    </tbody>
  </table>
</body>
</html>
