<?php foreach ($links as $link): ?>
	<?php if ($link->getPage()->is($page)): ?>
	    <a class="nav-link" href="<?= $link->url() ?>" aria-selected="true"><?= $link->getTitle() ?></a>
    <?php else: ?>
	    <a class="nav-link" href="<?= $link->url() ?>"><?= $link->getTitle() ?></a>
	<?php endif ?>
<?php endforeach ?>