<a href="<?= $card->url() ?>" class="list-card">
    <?php if($card->hasFeatureImage()): ?>
        <img class="mw-100 w-100" src="<?= $assetURL(['asset' => $card->getFeatureImageId(), 'width' => 640, 'height' => 500, 'action' => 'crop']) ?>" alt="Image of <?= $card->getTitle() ?>">
    <?php else: ?>
        <div class="list-card-noimage bg-secondary d-flex justify-content-center align-items-center">
            <p class="h1 p-2 
            ">Boombase</p>
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