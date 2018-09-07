<?= $view('inc.header') ?>

<section class="container mt-8">
	<div class="row py-4">
		<div class="col-12 col-md-6">
            <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
            <h2 class="h1"><?= $chunk('text', 'standfirst') ?></h2>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
        <?php $childrens = $getPages(['parent' => $page]); ?>

        <?php if (count($childrens)>0): ?>
            <?php foreach ($childrens as $child): ?>
                <div class="col-12 col-md-6 mb-2">
                    <?= $view('inc.list-card',['card' => $child]) ?>

                    <p class="text-standfirst mt-1 ml-2"><?= $child->getTitle() ?></p>
                </div>
            <?php endforeach ?>
        <?php endif ?>
	</div>
</section>

<?= $view('inc.footer') ?>