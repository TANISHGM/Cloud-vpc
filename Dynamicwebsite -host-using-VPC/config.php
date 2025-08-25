<?php
// ===== Edit these 4 values for your environment =====
$DB_HOST = "10.0.2.10";   // <-- Private EC2 (DB) private IP
$DB_USER = "webuser";     // <-- DB username
$DB_PASS = "StrongPass!123"; // <-- DB password
$DB_NAME = "mydb";        // <-- DB name
// =====================================================

mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_errno) {
    http_response_code(500);
    echo "<h1>Database connection failed</h1>";
    echo "<p>Error: " . htmlspecialchars($conn->connect_error) . "</p>";
    exit;
}
?>
