<?php require_once('_datas.php'); ?>

<!DOCTYPE html>
<html>
 <head>
	<title>
    <?php if(!isset($_GET['category_id'])): ?>
      <?php echo "Tous les articles"; ?>
    <?php else : ?>
      <?php echo $categories[$_GET['category_id']]['name'];?>
    <?php endif; ?> - Mon premier blog !
  </title>
   <?php require('partials/head_assets.php'); ?>
 </head>
 <body class="article-list-body">
	<div class="container-fluid">

		<?php require('partials/header.php'); ?>

		<div class="row my-3 article-list-content">

			<?php require('partials/nav.php'); ?>

			<main class="col-9">
                <section class="all_aricles">
                      <header>
                          <?php if(!isset($_GET['category_id'])): ?>
                          <h1 class="mb-4">
                            <?php echo "Tous les articles :"; ?>
                          <h1>
                      </header>
                        <?php else: ?>
                          <h1 class="mb-4">
                            <?php echo $categories[$_GET['category_id']]['name'];?>
                          </h1>
                          <div class="category-description mb-4">
                            <?php echo $categories[$_GET['category_id']]['description']; ?>
                          </div>
                        <?php endif; ?>

                       <?php foreach ($articles as $key => $value) : ?>
                        <?php if (!isset($_GET['category_id']) || (isset($_GET['category_id']) && $value['category_id'] == $_GET['category_id'])): ?>
                        <article class="mb-4">
                          <h2>
                          <?php echo $value['title']; ?>
                          </h2>
                            <b class="article_category">
                                [<?php
                                foreach ($categories as $key_categorie => $categorie):
                                    if ($value['category_id'] == $categorie['id']){
                                        echo $categorie['name'];
                                    }
                                endforeach;
                                ?>]
                            </b>
                          <span class="article_date">
                              <?php echo $value['date']; ?>
                          </span>
                          <div class=article-content>
                              <?php echo $value['summary']; ?>
                          </div>
                          <a href="article.php?article_id=
                               <?php echo $value['id'] ?>"> > Lire l'article
                          </a>
                        </article>
                        <?php endif; ?>
                      <?php endforeach; ?>
                </section>
			</main>
		</div>
		<?php require('partials/footer.php'); ?>
	</div>
 </body>
</html>
