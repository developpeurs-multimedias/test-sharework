<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sharework</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <header>
        <h1>Créer un Guide</h1>
    </header>
    <form id="newGuide" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend>Informations du Guide</legend>
            <label for="titre_guide">Titre du guide <span>*</span></label>
            <input id="titre_guide" type="text" name="titre_guide" value="" require>
            <label fort="sous_titre_guide">Sous titre du guide</label>
            <input id="sous_titre_guide" name="sous_titre_guide" value="">
        </fieldset>

        <fieldset>
            <div class="information information_document">
                <legend>Module Document</legend>
                <label for="titre_module_document">Titre du document</label>
                <input id="titre_module_document" type="text" name="titre_module_document" value="">
                <label fort="paragraphe">Description du document</label>
                <textarea id="description_document" name="description_document" value=""></textarea>
                <label for="fichier_module_document">Ajouter un document</label>
                <input id="fichier_module_document" type="file" name="fichier_module_document" require>
            </div>
            <div class="drag drag_document">
                <span class="arrow arrow_up">up</span>
                <span class="arrow arrow_down">down</span>
            </div>
        </fieldset>
        <fieldset>
            <div class="information information_texte">
                <legend>Module Teste</legend>
                <label for="titre_module_texte">Titre</label>
                <input id="titre_module_texte" type="text" name="titre_module_texte" value="">
                <label fort="paragraphe">Paragraphe</label>
                <textarea id="paragraphe" name="paragraphe" value=""></textarea>
            </div>
            <div class="drag drag_text">
                <span class="arrow arrow_up">up</span>
                <span class="arrow arrow_down">down</span>
            </div>
        </fieldset>

        <button type="submit" name="submit" value="submit">Sauver le guide</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            require_once('back/insertion-guide.php');   
        }
    ?>
</body>

</html>