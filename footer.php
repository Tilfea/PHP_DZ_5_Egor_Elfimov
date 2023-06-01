<footer>
<div class="out">
    <div class="logo2">
        <div class="logo"><img src="./img/Logo.png"></div>
        <div class="text4"><p>Foundation is a website template for startups and small teams. It helps to build a website in no time.</p></div>
        <div class="dna">
            <div class="app"><img src="./img/AppStore.png"></div>
            <div class="google"><img src="./img/Google Play.png"></div>
        </div>
    </div>

    <div class="product"><p>Product</p>
    <?php if (!empty($products)):
        foreach($products as $id => $page):?>
        <div><a href="/index.php?id=<?php echo $id ?>"><?php echo $page['name']; ?></a></div>
        <?php endforeach;
        endif; ?>
    </div>

    <div class="company1"><p>Company</p>
<?php if(!empty($Company)):
    foreach($Company as $id => $page):?>
    <div><a href="/index.php?id=<?php echo $id ?>"><?php echo $page['name']?></a></div>
    <?php endforeach;
    endif; ?>
</div>

</div>
<hr>
<div class="socials">
    <div class="Terms">
        <div><a href="#">Terms</a></div>
        <div><a href="#">Privacy</a></div>
        <div><a href="#">License</a></div>
    </div>
    <div class="Social">
        <div class="tw"><img src="./img/icon-twitter.png"></div>
        <div class="fb"><img src="./img/icon-fb.png"></div>
        <div class="li"><img src="./img/LinkedIn.png"></div>
    </div>
</div>
</footer>
</body>
</html>
