<?php foreach ($assets() as $asset): ?>
	<div class="card border-0">
        <a class="album-link" href="<?= $assetURL(['asset' => $asset->getId(), 'width' => 1440, 'action' => 'view']) ?>" data-sub-html="<h3><?= $asset->getDescription() ?>">
            <img class="mw-100" src="<?= $assetURL(['asset' => $asset->getId(), 'width' => 840, 'action' => 'view']) ?>" alt="Image of <?= $asset->getTitle() ?>" />
        </a> 
	</div>
<?php endforeach ?>