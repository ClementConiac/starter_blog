<?php require_once('_datas.php'); ?>

<!DOCTYPE html>
<html>
 <head>
   
   <title>Homepage - Mon premier blog !</title>

   <?php require('partials/head_assets.php'); ?>
   
 </head>
 <body class="index-body">
	<div class="container-fluid">
	
		<?php require('partials/header.php'); ?>
		
		<div class="row my-3 index-content">
		
			<?php require('partials/nav.php'); ?>
			
			<main class="col-9">
				<section class="latest_aricles">
					<header class="mb-4"><h1>Les 3 derniers articles :</h1></header>
					
					<!-- trois derniers articles -->
                    <?php $three_last_articles = array_slice($articles, 0, 3); ?>
                    <?php foreach ($three_last_articles as $key => $three_articles): ?>
                        <article class="mb-4">
                            <h2>
                                <?php echo $three_articles['title']; ?>
                            </h2>
                            <b class="article_category">
                                [<?php
                                foreach ($categories as $key => $categorie):
                                    if ($three_articles['category_id'] == $categorie['id']){
                                        echo $categorie['name'];
                                    }
                                endforeach;
                                ?>]
                            </b>
                            <span class="article-date">
                                <?php echo $three_articles['date']; ?>
                            </span>
                            <div class="article-content">
                                <?php echo $three_articles['summary']; ?>
                            </div>
                            <a href="article.php?article_id=<?php echo $three_articles['id']; ?>"> > Lire l'article </a>
                        </article>
                    <?php endforeach; ?>
                    <!---------->
					
				</section>

				<div class="text-right">
					<a href="article_list.php">> Tous les articles</a>
				</div>
			</main>
		</div>
		
		<?php require('partials/footer.php'); ?>

	</div>
 </body>
</html>
