<html>
    <title>Afia - Contact Us</title>
    <?php include 'header.php'; ?>
    <main>
        <form action="process_contact.php" method="post">
            <h1>Talk to Us</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>

</html>