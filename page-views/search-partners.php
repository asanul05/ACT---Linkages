<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "linkages");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pagination variables
$limit = 12; // 3 columns x 4 rows
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Search and category filters
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$category = isset($_GET['category']) ? $conn->real_escape_string($_GET['category']) : 'all';

// Build the query
$query = "SELECT * FROM partners WHERE 1=1";

if (!empty($search)) {
    $query .= " AND (name LIKE '%$search%' OR location LIKE '%$search%')";
}

if ($category !== 'all') {
    $query .= " AND type = '$category'";
}

$query .= " LIMIT $limit OFFSET $offset";

$result = $conn->query($query);

// Render partners
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="partner-card">';
        echo '<img src="../imgs/' . $row['logo'] . '" alt="' . htmlspecialchars($row['name']) . '">';
        echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
        echo '<p>' . htmlspecialchars($row['location']) . '</p>';
        echo '<span class="partner-type ' . htmlspecialchars($row['type']) . '">' . ucfirst(htmlspecialchars($row['type'])) . '</span>';
        echo '</div>';
    }
} else {
    echo '<p>No partners found.</p>';
}

$conn->close();
?>