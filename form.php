<?php
echo '<div class=\'other\'>
<p><img src=\'../img/Screenshot_3.png\'></p>
</div>';

if(empty($_POST['name'])):
    file_put_contents('./info_mail.txt', PHP_EOL . $_POST['email'], FILE_APPEND);
else:
    file_put_contents('./info.txt', PHP_EOL . implode(';', $_POST), FILE_APPEND);
endif;

header("refresh:10;url=/");
// sleep(10);
// header("Location: /");
// exit;

?>