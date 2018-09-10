<?= $view('inc.header') ?>

<section class="container py-5">
	<div class="row py-4">
		<div class="col-12 col-md-6">
            <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
            <h2 class="h1"><?= $chunk('text', 'standfirst') ?></h2>
		</div>
	</div>
</section>

<?php if (Editor::isEnabled() || $chunk('library', 'library')->hasContent()): ?>
    <section class="container py-5">
        <div class="row">
            <div class="col">
                <section id="albumgallery" class="card-columns">
                    <?= $chunk('library', 'library')->template('album-images')->setPlaceHolderText('Insert album asset library') ?>
                </section>
            </div>
        </div>
    </section>
<?php endif ?>


<?= $view('inc.footer') ?>