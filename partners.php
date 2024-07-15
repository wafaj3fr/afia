<title>Afia - Patners</title>
<?php include 'header.php'; ?>
<main>
    <h2 class="display-4">Partners</h2>
    <?php
    // Connect to database
    $conn = new mysqli('localhost', 'root', '', 'afia');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch partners
    $result = $conn->query("SELECT * FROM partners");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='partner'>";
            echo "<h3>" . $row['name'] . "</h3>";
            echo "<p>" . $row['description'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No partners found.";
    }

    $conn->close();
    ?>
</main>
<?php include 'footer.php'; ?>
