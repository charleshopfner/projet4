<?php $title = "Mise à jour";
ob_start();
?>

<h1 class="display-4 m-4 animated fadeIn slow">Mise à jour</h1>

<div class="d-flex justify-content-center mt-4">
    <form action="update.php?id=<?=$article['id']?>" method="post">
        <p><label class=" mt-3 h3" for="title"><u>Titre du chapitre</u> :</label></p>
        <p><input required type="text" name="title" class="titleinput" value="<?= htmlspecialchars($article['title'])?>"></p>
        <p class="m-4 h3"><u>Votre texte</u> : </p>
        <textarea name="textcontent" required ><?=$article['content']?></textarea>
        <input type="submit" value="Mettre à jour" class="btn btn-info mt-3 px-5">
    </form>
</div>

<? $content =ob_get_clean();
include 'template.php';
