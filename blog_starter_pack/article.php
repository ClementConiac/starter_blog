<?php require_once('_datas.php'); ?>

<?php $_GET['article_id'] = (int) $_GET['article_id']; ?>



<!DOCTYPE html>
<html>
    <head>
        <!-- titre de l'article (dynamique) -->
        <?php foreach ($articles as $key_one_articles => $one_articles): ?>
            <?php if ($_GET['article_id'] == $one_articles['id']): ?>
                <title><?php echo $one_articles['title']; ?></title>
            <?php endif; ?>
        <?php endforeach; ?>
        <!--------->

        <?php require('partials/head_assets.php'); ?>
    </head>

    <body class="article-body">
        <div class="container-fluid">
            <?php require('partials/header.php'); ?>

            <div class="row my-3 article-content">
                <?php require('partials/nav.php'); ?>

                <!--un article -->
                <main class="col-9">
                    <?php foreach ($articles as $key_one_articles => $one_articles): ?>
                        <?php if ($_GET['article_id'] == $one_articles['id']): ?>
                            <article>
                                <h1> <?php echo $one_articles['title']; ?> </h1>
                                <b class="article_category">
                                    [<?php
                                    foreach ($categories as $key_categorie => $categorie):
                                        if ($one_articles['category_id'] == $categorie['id']){
                                            echo $categorie['name'];
                                        }
                                    endforeach;
                                    ?>]
                                </b>
                                <span> <?php echo $one_articles['date']; ?> </span>
                                <div class="article-content"> <?php echo $one_articles['content']; ?> </div>
                            </article>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </main>
                <!----------->
            </div>

            <?php require('partials/footer.php'); ?>

        </div>
    </body>
</html>



