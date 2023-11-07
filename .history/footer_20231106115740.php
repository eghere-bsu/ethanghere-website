<div class="footer">
    <?php
    if (isset($_SESSION['auth']) && $_SESSION['auth'] === true && isset($_SESSION['username'])) {
        echo 'Logged in as ' . $_SESSION['username'];
    } else {
        // If the user is not logged in, you can display a different message or nothing.
    }
    ?>
    <a class="footer" href="#nav">Back to Top</a>
</div>
