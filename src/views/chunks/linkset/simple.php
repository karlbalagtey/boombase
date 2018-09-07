<?php foreach($links as $link): ?>
    <li>
    	<a <?= isset($class) ? "class='$class'" : '' ?> href="<?= $link->url() ?>">
			<?= $link->getText() ?>
		</a>
    </li>
<?php endforeach ?>