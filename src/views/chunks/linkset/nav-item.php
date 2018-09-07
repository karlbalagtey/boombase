<?php foreach ($links as $link): ?>
	<?php if ($link->getPage()->is($page)): ?>
	    <li class="nav-item active">
	    	<a class="nav-link" href="<?= $link->url() ?>" aria-selected="true"><?= $link->getTitle() ?></a>
	    </li>
    <?php else: ?>
    	<li class="nav-item">
		    <a class="nav-link" href="<?= $link->url() ?>"><?= $link->getTitle() ?></a>
    	<li>
	<?php endif ?>
<?php endforeach ?>