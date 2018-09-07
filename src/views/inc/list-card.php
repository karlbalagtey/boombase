<a href="<?= $card->url() ?>" class="list-card p-0 d-block">
    <?php if($card->hasFeatureImage()): ?>
        <img class="mw-100 w-100" src="<?= $assetURL(['asset' => $card->getFeatureImageId(), 'width' => 640, 'height' => 500, 'action' => 'crop']) ?>" alt="Image of <?= $card->getTitle() ?>">
    <?php else: ?>
        <div class="list-card-noimage bg-light">
            <span class="p-2 bg-primary h1 rounded 
            ">fp</span>
        </div>
    <?php endif ?>

    <div class="list-card-content p-2 text-white d-flex flex-column">
        <div class="mt-auto">
            <?php if (isset($title) && $title == true): ?>
                <p class="h3"><?= $card->getTitle() ?></p>
            <?php endif ?>

            <?= $chunk('text', 'standfirst', $card)->text() ?>
        </div>   
    </div>
</a>