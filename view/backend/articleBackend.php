<?php $title = htmlspecialchars($article['title']);
ob_start();?>

<!-- Display de l'article -->
<article class="article">
    <h2 class="display-3"><?=$article['title'];?></h2>
    <p class="m-3">Publié le <?=$article['date_posted'];?> , par <?=$article['author'];?></p>
    <p><?=nl2br(htmlspecialchars($article['content']));?></p>
</article>
<form class="my-5" action="modify.php?id=<?=$article['id']?>" method="POST">
    <input type="submit" class="btn mx-3" name="update" value="Éditer le chapitre">
    <input type="submit" class="btn deleteButton mx-3" name="delete" value="Supprimer le chapitre">
</form>
<hr>
<!-- Display des commentaires -->
<section id="comments" class="d-flex justify-content-around m-5">
    <div class="col-4">
        <h3 class="h2">Commentaires</h3>
        <?php
while ($comment = $comments->fetch()) {?>
    <div class="commentBox m-4">
        <div>
            <p><strong><?=htmlspecialchars($comment['author'])?></strong>, le <?=$comment['date_posted']?> : </p>
            <form method="POST" action="deleteComment.php?id=<?=$comment['id']?>&amp;postId=<?=$article['id']?>">
                <input id="signalButton" class="deleteButton" type="submit" value="Supprimer">
            </form>
        </div>
        <p><?=nl2br(htmlspecialchars($comment['comment']))?></p>
        </div>
        <?php
}
?>

</section>

<?php
$content = ob_get_clean();
require 'template.php';