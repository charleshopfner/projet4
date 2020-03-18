<?php $title = 'Admin Panel';
ob_start();?>

<h1 class="dancingscript">Bienvenue sur le panneau d'administration</h1>

<?php
while ($donnees = $req->fetch()) {
    if (strlen($donnees['content']) <= 400)
      $content = $donnees['content'];
    else
    {
      $debut = substr($donnees['content'], 0, 400);
      $debut = substr($debut, 0, strrpos($debut, ' ')) . '...';
    
      $content = $debut;
    }
?>
<article class="article">
    <h2 class="m-3 dancingscript"><a href="article.php?id=<?=$donnees['id']?>"><?=$donnees['title'];?></a></h2>
    <p>Publié le <?=$donnees['date_posted'];?> , par <?=$donnees['author'];?></p>

    <p class=" text-center"><?=nl2br(htmlspecialchars($content));?></p>
</article>
<button class="btn btn-primary mx-2"><a href="#">Éditer le chapitre</a></button>
<button class="btn btn-danger mx-2"><a href="#">Supprimer le chapitre</a></button>
<hr class="hr-shine shine">
<?php
}
$req->closeCursor();
?>

<?php $content = ob_get_clean();
include 'template.php';