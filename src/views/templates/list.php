<?= $view('inc.header') ?>

<section class="container mt-8">
	<div class="row py-4">
		<div class="col-12 col-md-6">
            <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
            <h2 class="h1"><?= $chunk('text', 'standfirst') ?></h2>
		</div>
	</div>
</section>

<?php $childrens = $getPages(['parent' => $page]); ?>
<?php if (count($childrens)>0): ?>
    <section class="container">
        <div class="row">
            <div class="col">
                <section class="card-columns">
                    <?php foreach ($childrens as $child): ?>
                        <div class="card">
                            <?= $view('inc.list-card',['card' => $child]) ?>

                            <p class="text-standfirst mt-1 ml-2"><?= $child->getTitle() ?></p>
                        </div>
                    <?php endforeach ?>
                </section>
            </div>
        </div>
    </section>
<?php endif ?>


<?= $view('inc.footer') ?>