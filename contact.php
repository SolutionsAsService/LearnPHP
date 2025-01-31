<?php include 'includes/header.php'; ?>
<section id="contact">
    <h2>Contact Us</h2>
    <form method="post" action="contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        echo "<p>Thank you, $name. We will respond to your message shortly.</p>";
    }
    ?>
</section>
<?php include 'includes/footer.php'; ?>
