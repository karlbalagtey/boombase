<?= $view('inc.header') ?>

<section class="bg-secondary">
    <section class="container py-5">
    	<div class="row py-4">
    		<div class="col-12 col-md-6">
                <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
                <div class="h1 mt-3"><?= $chunk('text', 'standfirst') ?></div>
    		</div>
    	</div>
    </section>
</section>

<section class="container">
	<div class="row my-5">
        <div class="col-12 col-md-8">
            <?= $chunk('text', 'bodycopy') ?>
	   </div>
    </div>
</section>

<?= $view('inc.footer') ?>