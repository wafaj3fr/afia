<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Afia - Our Team</title>
</head>
<?php include 'header.php'; ?>
<main>
    <h2 class="display-4">The Team</h2>
    <div class="team-container">
        <?php
        // Connect to database
        $conn = new mysqli('localhost', 'root', '', 'afia');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch team members
        $result = $conn->query("SELECT * FROM team");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card' style='width: 18rem; border-radius:16px; margin:20px;'>";
                echo "<img src='images/istockphoto-1389515075-1024x1024.jpg'>";
                echo "<div class='card-body'>";
                echo "<h3>" . $row['position'] . "</h3>";
                echo "<p>" . $row['bio'] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No team members found.";
        }

        $conn->close();
        ?>
    </div>
</main>
<?php include 'footer.php'; ?>

</html>