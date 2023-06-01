<?php
require_once './head.php';

require_once './pagesData.php';
?>
<main>
<?php if (empty($_GET['id'])): ?>

    <section class="block">
        <div class="block1">
            <div class="text1"><p>A bill that’s fair and flexible</p></div>
            <div class="text2"><p>Create live segments and target the right people for messages based on their behaviors.</p></div>
            <div class="button_head">
            <form class="form" action='./form.php' method='POST'>
            <button class="button"><a>Get Started</a></button>
            <div class="button2"><a href="#">Learn More</a></div>
            </form>
            </div>
        </div>
        <div class="block2"><img src="./img/ouch1.jpg"></div>
</section>

<section>
        <div class="img_now">
        <div class="img"><img src="./img/Feature 1.png"></div>
        <div class="img"><img src="./img/Feature 2.png"></div>
        <div class="img"><img src="./img/Feature 3.png"></div>
    </div>
</section>

<section>
    <div class="base">
        <div class="text3">
<div class="text4"><p>Engage Visitors</p></div>
<div class="text5"><p>Understand your audience</p></div>
<div class="text6"><p>Early stage company? Eligible applicants get all of our products for just $49 a month.</p></div>
        </div>
        <div class="img_now">
<div><img src="./img/Item 1.png"></div>
<div><img src="./img/Item 2.png"></div>
<div><img src="./img/Item 3.png"></div>
<div><img src="./img/Item 4.png"></div>
        </div>
    </div>
</section>

<section class='other'>
    <div class="categories">
        <div class="info">
            <div class="text4"><p>Communicate Better</p></div>
            <div class="text5"><p>Millions of Wi-Fi hotspots</p></div>
            <div class="text6"><p>Three products that can be used independently or combined together for your company’s needs.</p></div>
            <form class="form" action='./form.php' method='POST'>
            <button class="button"><a>Get Started</a></button>
            </form>
        </div>
        <div class="img3"><img src="./img/ouch2.png"></div>
    </div>
</section>

<section>
        <div class="cta">
            <div class="img4"><img src="./img/ouch3.png"></div>
            <div class="info2">
                <div class="text4"><p>Start your free trial.</p></div>
                <div class="text5"><p>Get notified about company updates, news and blog posts. We hate spam.</p></div>
                <form class="form" action='./form.php' method='POST'>
                <div><input type="email" name="email" placeholder="Enter your email" pattern=\'^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$\'></div>
                <button class="button"><a>Get Started</a></button>
            </form>
            </div>
        </div>
</section>

<?php 
else: 
require_once './page.php';
endif; ?>
</main>
<?php
require_once './footer.php'; 

?>

