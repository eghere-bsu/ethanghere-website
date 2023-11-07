<div class="footer">
    <span>
    <?php
        if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
            if (isset($_SESSION['username'])) {
                echo 'Logged in as ' . $_SESSION['username'];
            } else {
                echo 'Username not found';
            }
        } else {
            echo 'not logged in';
        }
    ?>
    </span>
    <a class="footer" href="#nav">Back to Top</a>
</div>
