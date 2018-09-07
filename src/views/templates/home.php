<?= $view('inc.header') ?>

<section class="container">
	<div>
		<h1 id="b-page-title"><?= $page->getTitle() ?></h1>
		<div>
			<?= $chunk('text', 'standfirst') ?>
		</div>
	</div>
</section>

<?= $view('inc.footer') ?>
