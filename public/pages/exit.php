<div>
    <?php
    if (isset($_SESSION['user'])) {
        session_destroy();
        echo '
        <h5 style="color: green">
        You were successfully logged out!
        </h5>';
    }else{
        echo '
        <h5>
        You are already logged out!
        </h5>';
    }

    ?>
</div>