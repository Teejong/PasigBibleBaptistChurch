<?php
$title = "Pasig Bible Baptist Church";
$currentPage = "live";
include 'includes/header.php';
date_default_timezone_set('Asia/Manila');
?>

<main>
    <div class="live">
        <div class="item1">
            <video width="320" height="240" controls>
                <source src="images/live.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <h5>Lorem ipsum dolor sit amet.</h5>
            <p><?php echo date('M d, Y'); ?></p>
            <hr>
        </div>
        <div class="item2">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, necessitatibus?</h2>
        </div>
    </div>
</main>

<?php include "includes/footer.php" ?>