<!-- <?php
if (!empty($products[$_GET['id']]['content'])):
echo $products[$_GET['id']]['content'];
else: echo $Company[$_GET['id']]['content'];
endif;

?> -->
<?php
if (!empty($products[$_GET['id']]['content'])):
    echo $products[$_GET['id']]['content'];
elseif (!empty($Company[$_GET['id']]['content'])): 
    echo $Company[$_GET['id']]['content'];
else: echo '<section class=\'other\'>
            <p>Страница отсутствует!</p>
            </section>';
endif;
?>