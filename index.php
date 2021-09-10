<?php
$title = "Pasig Bible Baptist Church";
$currentPage = "index";
include 'includes/header.php';
date_default_timezone_set('Asia/Manila');
?>

<main>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/header.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="welcome">
        <div class="item1">
            <h2>WELCOME</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <div class="btn">
                <button>Learn More</button>
            </div>
        </div>
        <div class="item2">
            <img src="images/donate.jpg">
        </div>
    </div>

    <div class="devotions">
        <div class="item1">
            <div class="title">
                <h3>Devotions</h3>
            </div>
            <h4><?php echo date('F d, l'); ?></h4>
            <h1>Proverbs 3:5-6</h1>
            <p>Do you trust God? Most believers will quickly answer yes. But stop and consider if that’s true in your prayer life. When your need is urgent but God isn’t answering as soon as you desire, do you still trust Him? Scenarios like this lead some believers to doubt that the Lord has His children’s best interests at heart.

                However, Isaiah 64:4 assures us that God “acts on behalf of those who wait for him” (NIV). Joseph had to wait in very difficult circumstances before the Lord set him free from prison and gave him authority as a ruler in Egypt (Gen. 37:18-28; Gen. 39:19-20). From an outsider’s viewpoint, it didn’t look as if God was acting on Joseph’s behalf. But from a heavenly perspective, events were right on track (50:20).

                The same is true in your life. During a period of waiting, God could be preparing you for a future answer that will come at just the right time. Or He might be teaching you to trust Him so you can walk by faith rather than sight. Another possibility is that your desire would ultimately involve something against His will, and withholding it serves as protection.

                You may never find out why God delays answering your prayer, but you can always trust in His goodness, wisdom, and love.
            </p>
            <div class="btn">
                <button>See All</button>
            </div>
        </div>
    </div>

    <div class="donate">
        <h2>Donate</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <button>Click Here</button>
    </div>

</main>

<?php include "includes/footer.php" ?>