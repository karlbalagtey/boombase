<?php foreach($links as $link): ?>
    <li>
    	<a href="<?= $link->url() ?>">
			<?= $link->getText() ?>
		</a>
    </li>
<?php endforeach ?>