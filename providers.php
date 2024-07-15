
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Afia - Network Providers</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <main class="container mt-5">
        <div class="text-center mb-5">
            <h2 class="display-4">Providers Network</h2>
        </div>
        <div class="row">
            <?php
            // Connect to database
            $conn = new mysqli('localhost', 'root', '', 'afia');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch providers
            $result = $conn->query("SELECT * FROM providers");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-4 mb-4'>";
                    echo "<div class='card' style='width: 18rem;'>";
                    echo "<img src='" . $row['image_url'] . "' class='card-img-top' alt='" . $row['name'] . "'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
                    echo "<p class='card-text'>" . $row['service'] . "</p>";
                    echo "<a href='https://busocieties.mn.co/members/24792097' class='btn btn-primary' target='_blank'>Visit Profile</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No providers found.";
            }

            $conn->close();
            ?>
        </div>
        <div class="text-center mt-5">
            <h3 class="display-5">Mighty Networks Shortcuts</h3>
            <!-- Placeholder for Mighty Networks Content -->
            <div id="mighty-networks-content" class="my-4"></div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Example function to fetch data from a placeholder API
        function fetchMightyNetworksData() {
            // Placeholder URL - Replace with Mighty Networks API endpoint
            const apiUrl = 'https://jsonplaceholder.typicode.com/users/2';

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    const contentDiv = document.getElementById('mighty-networks-content');
                    contentDiv.innerHTML = `
                        <div class="card" style="width: 18rem; margin: auto;">
                            <div class="card-body">
                                <h5 class="card-title">${data.name}</h5>
                                <p class="card-text">Username: ${data.username}</p>
                                <p class="card-text">Email: ${data.email}</p>
                            </div>
                        </div>
                    `;
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Fetch data on page load
        document.addEventListener('DOMContentLoaded', fetchMightyNetworksData);
    </script>
</body>
</html>
