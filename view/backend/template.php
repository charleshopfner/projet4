<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jean Forteroche - <?= $title?></title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="public/css/backend-style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="my-3"><a href="dashboard.php">Administration</a></h3>
                <hr>
            </div>
            <ul class="list-unstyled components">
                
                <h4>Articles</h4>
                <li>
                    <ul class="list-unstyled" id="articles-menu">
                        <li>
                            <a href="create.php">Nouvel article</a>
                        </li>
                        <li>
                            <a href="#">Editer l'article</a>
                        </li>
                        <li>
                            <a href="#">Supprimer l'article</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <hr>
                    <h4>Commentaires</h4>
                    <ul class="list-unstyled" id="comments-menu">
                        <li>
                            <a href="#">Supprimer un commentaire</a>
                        </li>
                        <li>
                            <a href="#">Éditer un commentaire</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg justify-content-end mb-3">
                <a href="logout.php">Se déconnecter</a>
            </nav>
            <?=$content?>

            <!-- Tiny MCE -->
            <script src="https://cdn.tiny.cloud/1/tqeabnftwl5b4cses0yd6673ns5czxp1uml0rmljgbqqu7s4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
                tinymce.init({
                selector: 'textarea',
                width: 900,
                height: 500,
                plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                });
            </script>
        </div>
    </div>
</body>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
</script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
</script>

</html>