<nav class="col-3 py-2 categories-nav">
	<b>Catégories :</b>
	<ul>
		<li><a href="article_list.php">Tous les articles</a></li>

                <?php foreach ($categories as $key => $categorie_id): ?>
                    <li>
                        <a href="article_list.php?category_id=<?php echo $key;  ?>">
                            <?php echo $categorie_id ['name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>

        <!-- liste des catégories -->
	</ul>
</nav>