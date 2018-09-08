<?= $view('inc.header') ?>

<section class="container py-5">
	<div class="row py-4">
		<div class="col-12 col-md-6">
            <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
            <h2 class="h1"><?= $chunk('text', 'standfirst') ?></h2>
		</div>
	</div>
</section>

<?php $childrens = $getPages(['parent' => $page]); ?>
<?php if (count($childrens)>0): ?>
    <section class="container py-5">
        <div class="row">
            <div class="col">
                <section class="card-columns">
                    <?php foreach ($childrens as $child): ?>
                        <div class="card border-0">
                            <?= $view('inc.list-card',['card' => $child]) ?>
                        </div>
                    <?php endforeach ?>
                </section>
            </div>
        </div>
    </section>
<?php endif ?>


<?= $view('inc.footer') ?>