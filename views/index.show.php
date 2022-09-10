<?php
//include_once 'myFuncs.php';
?>

<?php foreach ($posts as $post):?>
<h2>Название поста: <?= $post['title']?> </h2>
<p>Текст: <?= $post['content']?> </p>
<p>Рисунок:</p>
<img src="uploadImg/<?=$post['image']?>" width=40%>
<hr>
<?php endforeach; ?>
