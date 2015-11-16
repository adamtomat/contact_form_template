<?php

if (!empty($_POST)) {
    require_once 'ContactEmail.php';


    // The email address you want messages sent to
    $from = isset($_POST['email']) ? $_POST['email'] : null;
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $message = isset($_POST['message']) ? $_POST['message'] : null;

    $contactEmail = new App\ContactEmail($from, $message, $name);
    $emailSent = $contactEmail->send();
}
?>

<?php if (isset($emailSent) && $emailSent) : ?>
    <div>Email successfully sent!</div>
<?php endif; ?>

<div class="contact">
    <!-- contact form here -->
    <form action="index.php" method="post">
        <div>
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Your Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
</div>
